<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cour;

class CourController extends Controller
{
    public function index()
    {
        $cours = Cour::all();
        return view('back.cours.index', compact('cours'));
    }

    public function create()
    {

        return view('back.cours.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
        ]);

        Cour::create([
            'nom' => $request->nom,
            'status' => $request->status == "on" ? 1 : 0
        ]);
        return redirect()->route('cours')->with('success', 'Le cours a été ajouté avec succès.');
    }

    public function edit(int $id)
    {
        $cour = Cour::find($id);
        return view('back.cours.create', compact('cour'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'status' => ['required'],
        ]);

        $cour = Cour::find($id);
        $cour->nom = $request->nom;
        $cour->status = $request->status == "1" ? 1 : 0;
        $cour->save();


        return redirect()->route('cours')->with('success', 'Le cours a été mis à jour');
    }

    public function destroy(int $id)
    {

        $cour = Cour::find($id);
        $cour->delete();
        return redirect()->route('cours')->with('success', 'Le cours a bien été supprimé');
    }
}
