<?php

use Faker\Generator as Faker;

$factory->define(App\Role::class, function (Faker $faker) {
	$name = $faker->name;

    return [
        'name' => $name,
        'label' => ucfirst($name),
    ];
});