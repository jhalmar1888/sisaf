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
            'usuario'   => 'super',
            'id_modulo' => 1,
            'id_rol' => '2',
            'password' => bcrypt('1234567')
        ]);
        factory(\App\Entities\Usuario::class)->create([
            'usuario'   => 'admtes',
            'id_modulo' => 2,
            'id_rol' => '1',
            'password' => bcrypt('1234567')
        ]);
        factory(\App\Entities\Usuario::class)->create([
            'usuario'   => 'opetes',
            'id_modulo' => 2,
            'id_rol' => '3',
            'password' => bcrypt('1234567')
        ]);
        factory(\App\Entities\Usuario::class)->create([
            'usuario'   => 'usutes',
            'id_modulo' => 2,
            'id_rol' => '4',
            'password' => bcrypt('1234567')
        ]);

        factory(\App\Entities\Usuario::class)->create([
            'usuario'   => 'admcont',
            'id_modulo' => 3,
            'id_rol' => '1',
            'password' => bcrypt('1234567')
        ]);
        factory(\App\Entities\Usuario::class)->create([
            'usuario'   => 'opecont',
            'id_modulo' => 3,
            'id_rol' => '3',
            'password' => bcrypt('1234567')
        ]);
        factory(\App\Entities\Usuario::class)->create([
            'usuario'   => 'usucont',
            'id_modulo' => 3,
            'id_rol' => '4',
            'password' => bcrypt('1234567')
        ]);

        factory(\App\Entities\Usuario::class)->create([
            'usuario'   => 'admrrhh',
            'id_modulo' => 4,
            'id_rol' => '1',
            'password' => bcrypt('1234567')
        ]);
        factory(\App\Entities\Usuario::class)->create([
            'usuario'   => 'operrhh',
            'id_modulo' => 4,
            'id_rol' => '3',
            'password' => bcrypt('1234567')
        ]);
        factory(\App\Entities\Usuario::class)->create([
            'usuario'   => 'usurrhh',
            'id_modulo' => 4,
            'id_rol' => '4',
            'password' => bcrypt('1234567')
        ]);
        factory(\App\Entities\Usuario::class)->create([
            'usuario'   => 'admalmacen',
            'id_modulo' => 5,
            'id_rol' => '1',
            'password' => bcrypt('1234567')
        ]);
        factory(\App\Entities\Usuario::class)->create([
            'usuario'   => 'opealmacen',
            'id_modulo' => 5,
            'id_rol' => '3',
            'password' => bcrypt('1234567')
        ]);
        factory(\App\Entities\Usuario::class)->create([
            'usuario'   => 'usualmacen',
            'id_modulo' => 5,
            'id_rol' => '4',
            'password' => bcrypt('1234567')
        ]);


        factory(\App\Entities\Usuario::class)->create([
            'usuario'   => 'opepresupuestos',
            'id_modulo' => 6,
            'id_rol' => '3',
            'password' => bcrypt('1234567')
        ]);


    }
}
