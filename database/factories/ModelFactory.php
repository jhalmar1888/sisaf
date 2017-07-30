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
$factory->define(\App\Entities\TipoUnidad::class, function (\Faker\Generator $generator){
    return [];
});

$factory->define(\App\Entities\Partida::class, function (Faker\Generator $generator){
    return [
        'partida' => $generator->unique()->numberBetween($min=10, $max=10000)
    ];
});

$factory->define(\App\Entities\Unidad::class, function (\Faker\Generator $generator){
    return [];
});
