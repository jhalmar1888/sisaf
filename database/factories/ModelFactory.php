<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\Entities\Usuario::class, function (Faker\Generator $faker) {
    return [
        'usuario' => $faker->unique()->userName,
        'nombre' => $faker->name,
        'password' => bcrypt('secretos'),
    ];
});

$factory->define(\App\Entities\Ciudad::class, function (\Faker\Generator $generator){
    return [];
});

$factory->define(\App\Entities\Modulo::class, function (\Faker\Generator $generator){
    return [];
});

$factory->define(\App\Entities\Rol::class, function (\Faker\Generator $generator){
    return [];
});
$factory->define(\App\Entities\CatalogoCuentaemi::class, function (\Faker\Generator $generator){
    return [];
});
