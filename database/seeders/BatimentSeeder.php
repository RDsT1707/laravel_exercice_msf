<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BatimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 public function run(): void
{
    Batiment::create([
        'nom' => 'Bâtiment Principal',
        'description' => 'Ceci est le bâtiment principal de l’école.'
    ]);
    }
}