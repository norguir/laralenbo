<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$role = factory(Role::class)->create([
            'name' => 'admin',
            'label' => 'Administator'
        ]);

        foreach ( PermissionsTableSeeder::$types as $type) {
            foreach ( PermissionsTableSeeder::$actions as $action) {
                $role->assignPermission($type.'-'.$action);
            }
        }
        
        $role = factory(Role::class)->create([
            'name' => 'user',
            'label' => 'User'
        ]);

        foreach ( [
	            'user-update-own', 'user-read-own',
                'loan-create', 'loan-read', 'loan-update-own', 'loan-destroy-own',
            ] as $permission) {
            $role->assignPermission($permission);
        }
    }
}
