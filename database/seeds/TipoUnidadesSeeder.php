<?php

use Illuminate\Database\Seeder;

class TipoUnidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\TipoUnidad::Class)->create([
            'tipo' =>'Pieza',
        ]);
        factory(\App\Entities\TipoUnidad::Class)->create([
            'tipo' =>'Litro',
        ]);
        factory(\App\Entities\TipoUnidad::Class)->create([
            'tipo' =>'Kilo',
        ]);
        factory(\App\Entities\TipoUnidad::Class)->create([
            'tipo' =>'Gramos',
        ]);

    }
}
