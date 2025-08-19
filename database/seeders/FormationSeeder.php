<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Formation;

class FormationSeeder extends Seeder
{
    public function run(): void
    {
        $formations = [
            ['nom'=>'Développement Web', 'description'=>'HTML, CSS, JS'],
            ['nom'=>'Marketing Digital', 'description'=>'SEO, Social Media'],
            ['nom'=>'Design Graphique', 'description'=>'Photoshop, Illustrator'],
            ['nom'=>'Data Science', 'description'=>'Analyse de données Python'],
            ['nom'=>'SEO & Référencement', 'description'=>'Optimisation Google'],
            ['nom'=>'Gestion de Projet', 'description'=>'Agile, Scrum, Kanban']
        ];

        foreach($formations as $f) Formation::create($f);
    }
}
