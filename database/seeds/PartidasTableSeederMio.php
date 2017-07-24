<?php

use Illuminate\Database\Seeder;

class PartidasTableSeederMio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\Partida::class, 50)->create();
    }
}
