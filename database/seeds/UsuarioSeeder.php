<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\Usuario::class)->create([
            'id_modulo' => 1,
            'id_rol' => '1',
            'password' => bcrypt('1234567')
        ]);
    }
}
