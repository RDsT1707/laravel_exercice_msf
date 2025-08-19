<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Batiment;

class BatimentSeeder extends Seeder
{
    public function run(): void
    {
        Batiment::create([
            'nom' => 'Bâtiment Principal',
            'description' => 'Ceci est le bâtiment principal de l’école.'
        ]);
    }
}
