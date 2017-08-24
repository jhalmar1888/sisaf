<?php

use Illuminate\Database\Seeder;

class TesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\Carrera::class)->create([
            'carrera'=>'Ingeniería de Sistemas'
        ]);

        factory(\App\Entities\Carrera::class)->create([
            'carrera'=>'Ingeniería Civil'
        ]);

        factory(\App\Entities\Carrera::class)->create([
            'carrera'=>'Ingeniería de Sistemas Electronicos'
        ]);



        factory(\App\Entities\Beca::class)->create([
            'beca'          => 'Alumno Regular sin Descuento',
            'porcentaje'    => 0,
            'mensualidades' => 1184,
            'extension'     => 240,
            'seguro'        => 200,
            'matricula'     => 1184
        ]);

        factory(\App\Entities\Beca::class)->create([
            'beca'          => 'Alumno 1er Hijo de EE.CC. 20%',
            'porcentaje'    => 20,
            'mensualidades' => 947.20,
            'extension'     => 240,
            'seguro'        => 200,
            'matricula'     => 1184
        ]);



        factory(\App\Entities\Alumno::class)->create([
            'paterno'   => 'Seoane',
            'materno'   => 'Sanchez',
            'nombres'   => 'Charlie',
            'id_beca'   => 1,
            'direccion' => 'Av. Costanera #8',
            'telefono'  => '67677566',
            'email'     => 'cha@hotmail.com',
            'deudor'    => false,
            'observaciones' => 'Ninguna'
        ]);

        factory(\App\Entities\Alumno::class)->create([
            'paterno'   => 'Cruz',
            'materno'   => 'Paredes',
            'nombres'   => 'Jorge',
            'id_beca'   => 1,
            'direccion' => 'Av. Italia #20',
            'telefono'  => '2212360',
            'email'     => 'jogito@hotmail.com',
            'deudor'    => true,
            'observaciones' => 'No por el momento'
        ]);
    }
}
