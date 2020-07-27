<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Worker;
use Faker\Generator as Faker;

$factory->define(Worker::class, function (Faker $faker) {
	$type_payments_id = $faker->numberBetween(1, 2);
	if ($type_payments_id == 1) $rate = $faker->numberBetween(1, 25); else $rate = null;
    return [
    	'first_name' => $faker->firstNameMale,
    	'second_name' => $faker->lastName,
    	'patronymic' => $faker->lastName,
		'birthday' => $faker->date($format = 'Y-m-d', $max = '-30 years'),
		'position_id' => $faker->numberBetween(1, 4),
		'department_id' => $faker->numberBetween(1, 4),
		'type_payments_id' => $type_payments_id,
		'rate' => $rate,
		'created_at' => now(),

    ];
});
