<?php

use Illuminate\Database\Seeder;

class CatalogocuentaemiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\CatalogoCuentaemi::class)->create([
            'codigo' => '1',
            'descripcion' => 'Activo'
        ]);

        factory(\App\Entities\CatalogoCuentaemi::class)->create([
            'codigo' => '11',
            'descripcion' => 'Activo Corriente'
        ]);


    }
}
