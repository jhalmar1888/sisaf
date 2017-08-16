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
    $var = $generator->unique()->numberBetween($min=10, $max=10000);
    return [
        'partida' => $var,
        'descripcion' => $var
    ];
});

$factory->define(\App\Entities\Unidad::class, function (\Faker\Generator $generator){
    return [];
});

$factory->define(\App\Entities\Prcomprobante::class, function (\Faker\Generator $generator){
    return [];
});

$factory->define(\App\Entities\Probjeto::class, function (\Faker\Generator $generator){
    return [];
});

$factory->define(\App\Entities\Prregistro::class, function (\Faker\Generator $generator){
    return [];
});

$factory->define(\App\Entities\Contobjeto::class, function (\Faker\Generator $generator){
    return [];
});

$factory->define(\App\Entities\Contcomprobante::class, function (\Faker\Generator $generator){
    return [];
});

$factory->define(\App\Entities\Contregistro::class, function (\Faker\Generator $generator){
    return [];
});

$factory->define(\App\Entities\Arma::class, function (\Faker\Generator $generator){
    return [];
});

$factory->define(\App\Entities\Grado::class, function (\Faker\Generator $generator){
    return [];
});

$factory->define(\App\Entities\Especialidad::class, function (\Faker\Generator $generator){
    return [];
});

$factory->define(\App\Entities\EstadoCivil::class, function (\Faker\Generator $generator){
    return [];
});

$factory->define(\App\Entities\Cargo::class, function (\Faker\Generator $generator){
    return [];
});

$factory->define(\App\Entities\Persona::class, function (\Faker\Generator $faker){
    return [
        'ci' => $faker->unique()->numberBetween($min=10, $max=1000000),
        'paterno'   => $faker->lastName,
        'materno'   => $faker->lastName,
        'nombres'   => $faker->name,
        'exp'       => 'LP',
        'fechanacimiento'   => $faker->date('Y-m-d', 'now'),
        'lugarnacimiento'   => $faker->citySuffix,
        'id_sangre' => '1',
        'genero'    => 'masculino',
        'id_estadocivil' => '1',
        'telefono' => $faker->numberBetween($min=10000, $max=100000000),
        'direccion' => $faker->streetAddress,
    ];
});

$factory->define(\App\Entities\Sangre::class, function (\Faker\Generator $generator){
    return [];
});
