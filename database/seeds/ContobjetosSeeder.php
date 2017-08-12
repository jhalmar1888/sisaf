<?php

use Illuminate\Database\Seeder;

class ContobjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\Contobjeto::class)->create([
            'tipo' => '1',
            'nombre' => '10000000',
            'detalle' => 'EMI LA PAZ'
        ]);

        factory(\App\Entities\Contobjeto::class)->create([
            'tipo' => '1',
            'nombre' => '10090521',
            'detalle' => 'MAGEDU-3'
        ]);

        factory(\App\Entities\Contobjeto::class)->create([
            'tipo' => '1',
            'nombre' => '10090540',
            'detalle' => 'MASTI-8'
        ]);




        factory(\App\Entities\Contobjeto::class)->create([
            'tipo' => '2',
            'nombre' => '1112902',
            'detalle' => 'BANCO UNION S.A.'
        ]);

        factory(\App\Entities\Contobjeto::class)->create([
            'tipo' => '2',
            'nombre' => '2116101',
            'detalle' => 'DEBITO FISCAL'
        ]);

        factory(\App\Entities\Contobjeto::class)->create([
            'tipo' => '2',
            'nombre' => '5223001',
            'detalle' => 'INGRESO POR MAESTRIAS'
        ]);




        factory(\App\Entities\Contobjeto::class)->create([
            'tipo' => '3',
            'nombre' => '22008',
            'detalle' => 'BANCO UNION CTA. 160361144'
        ]);

        factory(\App\Entities\Contobjeto::class)->create([
            'tipo' => '3',
            'nombre' => '21005',
            'detalle' => 'SERVICIO NACIONAL DE IMPUESTOS INTERNOS'
        ]);

        factory(\App\Entities\Contobjeto::class)->create([
            'tipo' => '3',
            'nombre' => '11B230',
            'detalle' => 'MAESTRIAS EN GERENCIA EDUCATIVAS'
        ]);
    }
}
