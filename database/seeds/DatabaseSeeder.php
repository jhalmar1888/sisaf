<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CiudadSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(ModuloSeeder::class);
        $this->call(UsuarioSeeder::class);
    }
}
