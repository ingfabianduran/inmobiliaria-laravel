<?php

namespace Database\Seeders;

use App\Models\Foto;
use App\Models\Barrio;
use App\Models\Persona;
use App\Models\Inmueble;
use App\Models\RolPersona;
use App\Models\Telefono;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Barrio::factory(50)->create();
        Persona::factory(200)->has(Telefono::factory()->count(2))->create();
        RolPersona::factory(400)->create();
        Inmueble::factory(600)->has(Foto::factory()->count(8))->create();
    }
}
