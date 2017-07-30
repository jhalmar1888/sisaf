<?php

use Illuminate\Database\Seeder;

class UnidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\Unidad::class)->create([
            'unidad'    => 'EMI CENTRAL',
        ]);

        factory(\App\Entities\Unidad::class)->create([
            'unidad'    => 'EMI LA PAZ',
        ]);

        factory(\App\Entities\Unidad::class)->create([
            'unidad'    => 'EMI COCHABAMBA',
        ]);

        factory(\App\Entities\Unidad::class)->create([
            'unidad'    => 'EMI SANTA CRUZ',
        ]);

        factory(\App\Entities\Unidad::class)->create([
            'unidad'    => 'EMI RIBERALTA',
        ]);
    }
}
