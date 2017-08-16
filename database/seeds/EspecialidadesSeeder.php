<?php

use Illuminate\Database\Seeder;

class EspecialidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\Especialidad::class)->create([
            'especialidad' => ''
        ]);

        factory(\App\Entities\Especialidad::class)->create([
            'especialidad' => 'DEM.'
        ]);

        factory(\App\Entities\Especialidad::class)->create([
            'especialidad' => 'DAEN.'
        ]);

        factory(\App\Entities\Especialidad::class)->create([
            'especialidad' => 'DIM.'
        ]);

        factory(\App\Entities\Especialidad::class)->create([
            'especialidad' => 'MB.'
        ]);
    }
}
