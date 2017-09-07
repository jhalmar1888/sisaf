<?php

use Illuminate\Database\Seeder;

class ArmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\Arma::class)->create([
            'arma' => 'Inf.'
        ]);
        factory(\App\Entities\Arma::class)->create([
            'arma' => 'Cab.'
        ]);

        factory(\App\Entities\Arma::class)->create([
            'arma' => 'Art.'
        ]);

        factory(\App\Entities\Arma::class)->create([
            'arma' => 'Com.'
        ]);

        factory(\App\Entities\Arma::class)->create([
            'arma' => 'Ing.'
        ]);
    }
}
