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
        $this->call(UnidadesTableSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(PartidasTableSeederMio::class);
        $this->call(ArmasSeeder::class);
        $this->call(GradosSeeeder::class);
        $this->call(EspecialidadesSeeder::class);
        $this->call(EstadoscilivesSeeder::class);
        $this->call(CargosSeeder::class);
        $this->call(SangreSeeder::class);
        $this->call(PersonaSeeder::class);

        $this->call(TipoUnidadesSeeder::class);
        $this->call(ProbjetosSeeder::class);
        $this->call(ContobjetosSeeder::class);

        $this->call(TesTableSeeder::class);

    }
}
