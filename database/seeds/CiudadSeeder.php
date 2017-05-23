<?php

use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\Ciudad::class)->create([
            'id'   => 'LP',
            'ciudad' => 'La Paz'
        ]);

        factory(App\Entities\Ciudad::class)->create([
            'id'   => 'CB',
            'ciudad' => 'Cochabamba'
        ]);

        factory(App\Entities\Ciudad::class)->create([
            'id'   => 'SC',
            'ciudad' => 'Santa Cruz'
        ]);

        factory(App\Entities\Ciudad::class)->create([
            'id'   => 'PN',
            'ciudad' => 'Pando'
        ]);

        factory(App\Entities\Ciudad::class)->create([
            'id'   => 'BN',
            'ciudad' => 'Beni'
        ]);

        factory(App\Entities\Ciudad::class)->create([
            'id'   => 'OR',
            'ciudad' => 'Oruro'
        ]);

        factory(App\Entities\Ciudad::class)->create([
            'id'   => 'PT',
            'ciudad' => 'Potosí'
        ]);

        factory(App\Entities\Ciudad::class)->create([
            'id'   => 'TJ',
            'ciudad' => 'Tarija'
        ]);

        factory(App\Entities\Ciudad::class)->create([
            'id'   => 'CH',
            'ciudad' => 'Chuquisaca'
        ]);
    }
}
