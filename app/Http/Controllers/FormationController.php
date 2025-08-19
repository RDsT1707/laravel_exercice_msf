<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index() {
        $formations = Formation::all();
        return view('formations.index', compact('formations'));
    }

    public function show($id) {
        $formation = Formation::findOrFail($id);
        return view('formations.show', compact('formation'));
    }

    public function create() {
        return view('formations.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nom'=>'required|max:30',
            'description'=>'required'
        ]);

        Formation::create($request->all());
        return redirect()->route('formations.index');
    }

    public function edit($id) {
        $formation = Formation::findOrFail($id);
        return view('formations.edit', compact('formation'));
    }

    public function update(Request $request, $id) {
        $formation = Formation::findOrFail($id);

        $request->validate([
            'nom'=>'required|max:30',
            'description'=>'required'
        ]);

        $formation->update($request->all());
        return redirect()->route('formations.index');
    }

    public function destroy($id) {
        $formation = Formation::findOrFail($id);
        $formation->delete();
        return redirect()->route('formations.index');
    }
}
