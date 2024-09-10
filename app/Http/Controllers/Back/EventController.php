<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::orderBy('created_at', 'desc')->paginate(10);
        return view('back.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'start_date' => ['required', 'string'],
            'end_date' => ['nullable', 'string'],
            'start_time' => ['nullable', 'string'],
            'end_time' => ['nullable', 'string'],
            'localisation' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'status' => ['required'],
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
        }


        Event::create([
            'type' => $request->type,
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'localisation' => $request->localisation,
            'image' => $imagePath,
            'status' => $request->status == "1" ? 1 : 0,
            'formateur' => 'required|string|max:255',
            'emploi' => 'required|string|max:255',
            'societe_actuelle' => 'required|string|max:255',
            'linked' => 'nullable|string|max:255'
        ]);

        return redirect()->route('back.events')->with('success', 'L\'evenement a bien été ajouté.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $event = Event::find($id);
        return view('back.events.create', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        // Validation des champs
        $validated = $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'start_time' => 'nullable|string',
            'end_time' => 'nullable|string',
            'localisation' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
            'formateur' => 'required|string|max:255',
            'emploi' => 'required|string|max:255',
            'societe_actuelle' => 'required|string|max:255',
            'linked' => 'nullable|string|max:255',
        ]);

        // Recherche de l'événement par son ID
        $event = Event::findOrFail($id);

        // Gestion de l'image
        if ($request->hasFile('image')) {
            // Supprimez l'ancienne image si nécessaire
            if ($event->image) {
                Storage::disk('public')->delete($event->image);
            }

            // Stockage de la nouvelle image
            $validated['image'] = $request->file('image')->store('events', 'public');
        }

        // Mise à jour de l'événement
        $validated['status'] = $request->status == "1" ? 1 : 0;
        $event->update($validated);

        // Redirection avec un message de succès
        return redirect()->route('back.events')->with('success', 'L\'événement a bien été modifié.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('back.events')->with('success', 'L\'event a bien été supprimé.');
    }
}
