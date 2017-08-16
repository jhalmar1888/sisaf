<?php

use Illuminate\Database\Seeder;

class EstadoscilivesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\EstadoCivil::class)->create([
            'estadocivil' => 'Soltero'
        ]);

        factory(\App\Entities\EstadoCivil::class)->create([
            'estadocivil' => 'Soltera'
        ]);

        factory(\App\Entities\EstadoCivil::class)->create([
            'estadocivil' => 'Casado'
        ]);

        factory(\App\Entities\EstadoCivil::class)->create([
            'estadocivil' => 'Casada'
        ]);

        factory(\App\Entities\EstadoCivil::class)->create([
            'estadocivil' => 'Divorciado'
        ]);

        factory(\App\Entities\EstadoCivil::class)->create([
            'estadocivil' => 'Divorciada'
        ]);

        factory(\App\Entities\EstadoCivil::class)->create([
            'estadocivil' => 'Separado'
        ]);

        factory(\App\Entities\EstadoCivil::class)->create([
            'estadocivil' => 'Separada'
        ]);

        factory(\App\Entities\EstadoCivil::class)->create([
            'estadocivil' => 'Union Libre'
        ]);

        factory(\App\Entities\EstadoCivil::class)->create([
            'estadocivil' => 'Viudo'
        ]);

        factory(\App\Entities\EstadoCivil::class)->create([
            'estadocivil' => 'Viuda'
        ]);
    }
}
