<?php

namespace App\Http\Controllers;

use App\Models\Typeformation;
use Illuminate\Http\Request;

class TypeformationController extends Controller
{
    public function index() {
        $types = Typeformation::all();
        return view('typeformations.index', compact('types'));
    }

    public function show($id) {
        $type = Typeformation::findOrFail($id);
        return view('typeformations.show', compact('type'));
    }

    public function create() {
        return view('typeformations.create');
    }

    public function store(Request $request) {
        $request->validate(['nom'=>'required|max:30']);
        Typeformation::create($request->all());
        return redirect()->route('typeformations.index');
    }

    public function edit($id) {
        $type = Typeformation::findOrFail($id);
        return view('typeformations.edit', compact('type'));
    }

    public function update(Request $request, $id) {
        $type = Typeformation::findOrFail($id);
        $request->validate(['nom'=>'required|max:30']);
        $type->update($request->all());
        return redirect()->route('typeformations.index');
    }

    public function destroy($id) {
        $type = Typeformation::findOrFail($id);
        $type->delete();
        return redirect()->route('typeformations.index');
    }
}
