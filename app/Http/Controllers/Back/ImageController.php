<?php

namespace App\Http\Controllers\Back;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $imagesBySection = Image::all()->groupBy('section');

        $sections = ['accueil', 'about', 'owner', 'admissions'];
        foreach ($sections as $section) {
            if (!isset($imagesBySection[$section])) {
                $imagesBySection[$section] = collect();
            }
        }

        return view('back.dashboard', compact('imagesBySection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // Validation des données entrantes
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'section' => 'required|in:accueil,about,owner,admissions',
        ]);

        $section = $request->input('section');
        $directory = "uploads/{$section}";

        // Vérifier s'il existe déjà une image associée à la section
        $existingImage = Image::where('section', $section)->first();

        if ($existingImage) {
            // Supprimer l'ancienne image du stockage
            $oldImagePath = storage_path('app/public/' . $directory . '/' . $existingImage->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            // Supprimer l'ancien enregistrement
            $existingImage->delete();
        }

        if ($request->hasFile('image')) {
            // Récupérer le fichier
            $file = $request->file('image');

            // Générer un nom unique pour l'image
            $filename = time() . '_' . $file->getClientOriginalName();

            // Enregistrer l'image dans le répertoire public/storage/uploads/{section}
            $file->storeAs($directory, $filename, 'public');

            // Enregistrer les informations de la nouvelle image dans la base de données
            Image::create([
                'image' => $filename,
                'section' => $section,
            ]);

            // Redirection avec message de succès
            return redirect()->back()->with('success', 'L\'image a été mise à jour avec succès !');
        }

        // Redirection avec message d'erreur si aucun fichier n'a été uploadé
        return redirect()->back()->with('error', 'Veuillez sélectionner une image.');
    }
}
