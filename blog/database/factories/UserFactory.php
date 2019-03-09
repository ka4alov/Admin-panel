<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt(123456), // password
        'phone'=> '0999999999',
        'remember_token' => Str::random(10),
    ];
});
$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'brand' => 'colins',
        'description' => 'Тестовый',
        'price' => 12,
        'publish' => 1,
    ];
});
