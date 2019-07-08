<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Technician;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Technician::class, function (Faker $faker) {
    return [
        'f_name' => $faker->firstName,
        'l_name' => $faker->lastName,
        'birth_date' => $faker->date('Y-m-d', '2002-01-20'),
        'sex' => $faker->randomElement(['M','F']),
        'phone' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'marital_status' => $faker->randomElement(['Married','Single','Divorced']),
        'work_place' => $faker->city,
        'work_place_lat' => $faker->latitude,
        'work_place_long' => $faker->longitude,
        'image' => null,
//        'image' => $faker->image('public/storage/images',400,300,null,false),
    ];
});
