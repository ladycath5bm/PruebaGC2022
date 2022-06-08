<?php

namespace Database\Seeders;

use App\Models\Gce_caracteristicas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Gce_caracteristicas::factory(10)->create();
    }
}
