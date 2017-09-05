<?php

use Illuminate\Database\Seeder;

class ModuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\Modulo::class)->create([
            'modulo' => 'Administrador'
        ]);

        factory(\App\Entities\Modulo::class)->create([
            'modulo' => 'Tesoreria'
        ]);

        factory(\App\Entities\Modulo::class)->create([
            'modulo' => 'Contabilidad'
        ]);

        factory(\App\Entities\Modulo::class)->create([
            'modulo' => 'RR.HH.'
        ]);

        factory(\App\Entities\Modulo::class)->create([
            'modulo' => 'Almacen'
        ]);

        factory(\App\Entities\Modulo::class)->create([
            'modulo' => 'Presupuestos'
        ]);
        factory(\App\Entities\Modulo::class)->create([
            'modulo' => 'Cobranza'
        ]);
    }
}
