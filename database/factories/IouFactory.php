<?php

use Faker\Generator as Faker;

$factory->define(App\Iou::class, function (Faker $faker) {
	
	$amount = $faker->numberBetween(100,10000);
	$delay_unit = $faker->randomElement(['month','once']);
	$delay_value = $faker->numberBetween(1,100);

    return [
        'accepted_at' => ($faker->boolean() ? $faker->dateTimeThisYear() : null),
        'amount' => $amount,
        'borrower_id' =>  factory('App\User')->create(),
        'compensation' => $faker->sentence(),
        'currency' => 'EUR',
		'initiated_by' => $faker->randomElement(['borrower','lender']),
        'lender_id' => factory('App\User')->create(),
        'money_released' => $faker->boolean(),
        'pdf' => null,
        'repayment_delay_unit' => $delay_unit,
        'repayment_delay_value' => $delay_value,
        'repayment_repeat' => $faker->randomElement(['days','weeks','month']),
        'subject' => $faker->sentence(),
    ];
    
});
