<?php

use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class IousTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
		$iouses = factory('App\Iou',10)->create();
        

    }
}
