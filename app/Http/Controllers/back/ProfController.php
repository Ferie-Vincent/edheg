<?php

namespace App\Http\Controllers\Back;

use App\Models\Prof;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profs = Prof::all();
        return view('back.profs.index', compact('profs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.profs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des champs
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'filiere' => ['required', 'string', 'max:255'],
            'niveau' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        // Gestion de l'image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profs', 'public');
        }

        // Création du professeur
        Prof::create([
            'nom' => $request->nom,
            'filiere' => $request->filiere,
            'niveau' => $request->niveau,
            'image' => $imagePath,
        ]);

        // Redirection après la création avec un message de succès
        return redirect()->route('back.profs')->with('success', 'Le professeur a bien été ajouté.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Prof $prof)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $prof = Prof::find($id);
        return view('back.profs.create', compact('prof'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'filiere' => ['required', 'string', 'max:255'],
            'niveau' => ['required', 'string', 'max:255'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $prof = Prof::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($prof->image) {
                Storage::disk('public')->delete($prof->image);
            }
            $validated['image'] = $request->file('image')->store('profs', 'public');
        }

        $prof->update($validated);
        return redirect()->route('back.profs')->with('success', 'Le professeur a bien été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $prof = Prof::find($id);
        $prof->delete();
        return redirect()->route('back.profs')->with('success', 'Le professeur a bien été supprimé.');
    }
}
