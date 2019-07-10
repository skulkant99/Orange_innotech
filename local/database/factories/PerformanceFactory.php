<?php

use App\Performance;
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

$factory->define(Performance::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'fund' => $faker->fund,
        'gain' => $faker->gain,
        'result' => $faker->result,
        'Indicator' => $faker->Indicator,
        'type' => $faker->type,
    ];
});

