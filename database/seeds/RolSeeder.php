<?php

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\Rol::class)->create([
            'rol' => 'administrador'
        ]);

        factory(\App\Entities\Rol::class)->create([
            'rol' => 'superadministrador'
        ]);

        factory(\App\Entities\Rol::class)->create([
            'rol' => 'operador'
        ]);

        factory(\App\Entities\Rol::class)->create([
            'rol' => 'usuario'
        ]);

        factory(\App\Entities\Rol::class)->create([
            'rol' => 'usuario_ingresos'
        ]);

        factory(\App\Entities\Rol::class)->create([
            'rol' => 'usuario_egresos'
        ]);

        factory(\App\Entities\Rol::class)->create([
            'rol' => 'usuario_cargosdecuenta'
        ]);
    }
}
