<?php

use Illuminate\Database\Seeder;

class GradosSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\Grado::class)->create([
            'grado' => ''
        ]);

        factory(\App\Entities\Grado::class)->create([
            'grado' => 'GRAL.'
        ]);

        factory(\App\Entities\Grado::class)->create([
            'grado' => 'CNL.'
        ]);

        factory(\App\Entities\Grado::class)->create([
            'grado' => 'TCNL.'
        ]);

        factory(\App\Entities\Grado::class)->create([
            'grado' => 'MY.'
        ]);

        factory(\App\Entities\Grado::class)->create([
            'grado' => 'CAP.'
        ]);
    }
}
