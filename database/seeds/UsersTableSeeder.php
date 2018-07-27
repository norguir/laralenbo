<?php

use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
		$admin = factory('App\User')->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
		]);
        $admin->assignRole('admin');
        
        $user1 = factory('App\User')->create([
            'name' => 'user1',
            'email' => 'user1@example.com'
        ]);
        $user1->assignRole('user');
        
        $user2 = factory('App\User')->create([
            'name' => 'user2',
            'email' => 'user2@example.com'
        ]);
        $user2->assignRole('user');

        $user = factory('App\User')->create([
            'name' => 'anonymous_lender',
            'email' => 'anonymous_lender@lenbo.com'
        ]);
        $user->assignRole('user');

        $user = factory('App\User')->create([
            'name' => 'anonymous_borrower',
            'email' => 'anonymous_borrower@lenbo.com'
        ]);
        $user->assignRole('user');

    }
}
