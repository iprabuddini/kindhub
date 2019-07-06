<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\SchoolClass;
use Faker\Generator as Faker;

$factory->define(SchoolClass::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'description' => $faker->paragraph,
        
    ];
});
