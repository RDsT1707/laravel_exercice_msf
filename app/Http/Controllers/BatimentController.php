<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use Illuminate\Http\Request;

class BatimentController extends Controller
{
    public function index() {
        $batiments = Batiment::all();
        return view('batiments.index', compact('batiments'));
    }

    public function show($id) {
        $batiment = Batiment::findOrFail($id);
        return view('batiments.show', compact('batiment'));
    }

    public function create() {
        return view('batiments.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nom'=>'required|max:30',
            'description'=>'required'
        ]);

        Batiment::create($request->all());
        return redirect()->route('batiments.index');
    }

    public function edit($id) {
        $batiment = Batiment::findOrFail($id);
        return view('batiments.edit', compact('batiment'));
    }

    public function update(Request $request, $id) {
        $batiment = Batiment::findOrFail($id);

        $request->validate([
            'nom'=>'required|max:30',
            'description'=>'required'
        ]);

        $batiment->update($request->all());
        return redirect()->route('batiments.index');
    }

    public function destroy($id) {
        $batiment = Batiment::findOrFail($id);
        $batiment->delete();
        return redirect()->route('batiments.index');
    }
}
