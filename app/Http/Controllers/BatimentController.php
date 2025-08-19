<?php

namespace App\Http\Controllers;

use App\Models\Batiment;

class BatimentController
{
    public function index()
    {
        $batiments = Batiment::all();
        return view('batiments.index', compact('batiments'));
    }
}
