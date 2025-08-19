<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            BatimentSeeder::class,
            FormationSeeder::class,
            TypeformationSeeder::class,
            EleveSeeder::class,
        ]);
    }
}
