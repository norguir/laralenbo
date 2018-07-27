<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionsTableSeeder extends Seeder
{
	public static $types = [
        'user',
        'loan',
    ];
    public static $actions = [
        'create',
        'read',
        'update',
        'destroy',
        'update-own',
        'read-own',
        'destroy-own',
    ];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		foreach(PermissionsTableSeeder::$types as $type) { 
            foreach (PermissionsTableSeeder::$actions as $action) {
                 factory(Permission::class)->create([
                    'name' => $type.'-'.$action,
                    'label' => ucfirst($type).': '.ucfirst($action)
                ]);
            }
        }

    }
}
