<?php

use Illuminate\Database\Seeder;

class CargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\Cargo::class)->create([
            'cargo' => 'Secretaria'
        ]);

        factory(\App\Entities\Cargo::class)->create([
            'cargo' => 'Carpero'
        ]);

        factory(\App\Entities\Cargo::class)->create([
            'cargo' => 'Chofer'
        ]);

        factory(\App\Entities\Cargo::class)->create([
            'cargo' => 'Resp. Laboratorio'
        ]);

        factory(\App\Entities\Cargo::class)->create([
            'cargo' => 'Resp. Informatica'
        ]);

        factory(\App\Entities\Cargo::class)->create([
            'cargo' => 'Recepcionista'
        ]);

        factory(\App\Entities\Cargo::class)->create([
            'cargo' => 'Auxiliar'
        ]);
    }
}
