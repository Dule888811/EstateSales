<?php
use App\Ad;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Ad::class, function (Faker $faker) {

            return [
                'ad_title' => $faker->title,
                'city' => $faker->city,
                'hoods' => $faker->name,
                'street' => $faker->streetName,
                'price' => $faker->randomDigitNotNull,
                'quadrature' => $faker->randomDigitNotNull,
                'estate_types' => $faker->name,


    ];
});
