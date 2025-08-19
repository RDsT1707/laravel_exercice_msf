<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Formation;

class FormationSeeder extends Seeder
{
    public function run(): void
    {
        $formations = [
            ['nom' => 'Développement Web', 'description' => 'Formation en HTML, CSS, JS'],
            ['nom' => 'Marketing Digital', 'description' => 'Apprenez le marketing en ligne'],
            ['nom' => 'Design Graphique', 'description' => 'Photoshop, Illustrator...'],
            ['nom' => 'Data Science', 'description' => 'Analyse de données avec Python'],
            ['nom' => 'SEO & Référencement', 'description' => 'Optimisation pour Google'],
            ['nom' => 'Gestion de Projet', 'description' => 'Agile, Scrum et Kanban'],
        ];

        foreach ($formations as $f) {
            Formation::create($f);
        }
    }
}