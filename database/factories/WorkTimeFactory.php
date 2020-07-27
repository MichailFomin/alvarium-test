<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\WorkTime;
use Faker\Generator as Faker;

$factory->define(WorkTime::class, function (Faker $faker) {
    return [
		'worktime' => $faker->numberBetween(1, 8),
		'worker_id' => $faker->numberBetween(1, 500),
		'created_at' => $faker->dateTimeThisMonth($max = 'now', $timezone = null),
    ];
});
