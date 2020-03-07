<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'title'=>rtrim($faker->sentence( rand(5,10)), '.'),
		'body'=>$faker->paragraph(rand(3,7), true),
		'views'=>$faker->numberBetween(0,10),
		'answers'=>$faker->numberBetween(0,10),
		'votes'=>$faker->numberBetween(-3,10)
    ];
});
