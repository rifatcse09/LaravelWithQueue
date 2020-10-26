<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'item_count' => rand(1,10),
        'email' =>$faker->unique()->safeEmail,
    ];
});
