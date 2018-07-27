<?php

namespace App;

trait HasRoles
{
    /**
     * A user may have multiple roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * Assign the given role to the user.
     *
     * @param  string $role
     *
     * @return 
     */
    public function assignRole($role)
    {
        if ( $this->roles()->whereName($role)->first() == null) 
            return $this->roles()->attach(Role::whereName($role)->firstOrFail());
        
    }

    public function assignRoles($roles) {
        foreach($roles as $role) $this->assignRole($role);
    }

    /**
     * Determine if the user has the given role.
     *
     * @param  mixed $role
     *
     * @return boolean
     */
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        return !! $role->intersect($this->roles)->count();
    }

    /**
     * Determine if the user may perform the given permission.
     *
     * @param  Permission $permission
     *
     * @return boolean
     */
    public function hasPermission($permission)
    {
        if (is_string($permission)) {
            foreach($this->roles as $role) {
                if ($role->permissions->contains('name', $permission)) return true;
            }
            return false;
        }
        return $this->hasRole($permission->roles);
    }
}
