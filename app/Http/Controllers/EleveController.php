<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index() {
        $eleves = Eleve::all();
        return view('eleves.index', compact('eleves'));
    }

    public function show($id) {
        $eleve = Eleve::findOrFail($id);
        return view('eleves.show', compact('eleve'));
    }

    public function create() {
        return view('eleves.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nom'=>'required|max:30',
            'prenom'=>'required|max:30',
            'age'=>'required|integer',
            'etat'=>'required|boolean'
        ]);

        Eleve::create($request->all());
        return redirect()->route('eleves.index');
    }

    public function edit($id) {
        $eleve = Eleve::findOrFail($id);
        return view('eleves.edit', compact('eleve'));
    }

    public function update(Request $request, $id) {
        $eleve = Eleve::findOrFail($id);

        $request->validate([
            'nom'=>'required|max:30',
            'prenom'=>'required|max:30',
            'age'=>'required|integer',
            'etat'=>'required|boolean'
        ]);

        $eleve->update($request->all());
        return redirect()->route('eleves.index');
    }

    public function destroy($id) {
        $eleve = Eleve::findOrFail($id);
        $eleve->delete();
        return redirect()->route('eleves.index');
    }
}
