<?php

use Illuminate\Database\Seeder;

class ProbjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\Probjeto::class)->create([
            'tipo' => '1',
            'nombre' => '10010000',
            'detalle' => 'RECTORADO'
        ]);

        factory(\App\Entities\Probjeto::class)->create([
            'tipo' => '1',
            'nombre' => '10020000',
            'detalle' => 'AUDITORIA INTERNA'
        ]);

        factory(\App\Entities\Probjeto::class)->create([
            'tipo' => '1',
            'nombre' => '10030000',
            'detalle' => 'ASESORIA JURIDICA'
        ]);





        factory(\App\Entities\Probjeto::class)->create([
            'tipo' => '2',
            'nombre' => '00000001',
            'detalle' => 'ADMINISTRACION INSTITUCIONAL'
        ]);




        factory(\App\Entities\Probjeto::class)->create([
            'tipo' => '3',
            'nombre' => '22110',
            'detalle' => 'PASAJES AL INTERIOR DEL PAIS'
        ]);

        factory(\App\Entities\Probjeto::class)->create([
            'tipo' => '3',
            'nombre' => '22120',
            'detalle' => 'PASAJES AL EXTERIOR DEL PAIS'
        ]);

        factory(\App\Entities\Probjeto::class)->create([
            'tipo' => '3',
            'nombre' => '22210',
            'detalle' => 'VIATICOS AL INTERIOR DEL PAIS'
        ]);

        factory(\App\Entities\Probjeto::class)->create([
            'tipo' => '3',
            'nombre' => '22220',
            'detalle' => 'VIATICOS AL EXTERIOR DEL PAIS'
        ]);
    }
}
