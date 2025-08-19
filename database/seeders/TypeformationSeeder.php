<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Typeformation;

class TypeformationSeeder extends Seeder
{
    public function run(): void
    {
        for($i=1;$i<=10;$i++){
            Typeformation::create(['nom'=>"Type Formation $i"]);
        }
    }
}
