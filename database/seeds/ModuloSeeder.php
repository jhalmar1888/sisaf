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
            'modulo' => 'Tesoreria'
        ]);

        factory(\App\Entities\Modulo::class)->create([
            'modulo' => 'Contabilidad'
        ]);

        factory(\App\Entities\Modulo::class)->create([
            'modulo' => 'RR.HH.'
        ]);
    }
}
