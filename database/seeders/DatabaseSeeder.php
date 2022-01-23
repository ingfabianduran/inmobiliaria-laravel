<?php

namespace Database\Seeders;

use App\Models\Barrio;
use App\Models\Foto;
use App\Models\Inmueble;
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
        Inmueble::factory(100)->create();
        Foto::factory(500)->create();
    }
}
