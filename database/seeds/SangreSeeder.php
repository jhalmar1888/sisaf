<?php

use Illuminate\Database\Seeder;

class SangreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\Sangre::class)->create([
            'tiposangre'    => 'ORH (+)'
        ]);

        factory(\App\Entities\Sangre::class)->create([
            'tiposangre'    => 'ORH (-)'
        ]);

        factory(\App\Entities\Sangre::class)->create([
            'tiposangre'    => 'ARH (+)'
        ]);

        factory(\App\Entities\Sangre::class)->create([
            'tiposangre'    => 'ARH (-)'
        ]);

        factory(\App\Entities\Sangre::class)->create([
            'tiposangre'    => 'BRH (+)'
        ]);

        factory(\App\Entities\Sangre::class)->create([
            'tiposangre'    => 'BRH (-)'
        ]);

        factory(\App\Entities\Sangre::class)->create([
            'tiposangre'    => 'ABRH (+)'
        ]);

        factory(\App\Entities\Sangre::class)->create([
            'tiposangre'    => 'ABRH (-)'
        ]);
    }
}
