<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Eleve;

class EleveSeeder extends Seeder
{
    public function run(): void
    {
        Eleve::factory(50)->create();
    }
}
