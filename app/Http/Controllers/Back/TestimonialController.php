<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\testimonial;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = testimonial::all();
        return view('back.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'comment' => ['required', 'nullable'], // Remove 'string' validation here
        ]);


        $data = Testimonial::create([
            'name' => $request->name,
            'comment' => $request->comment,
        ]);

        return redirect()->route('back.testimonials')->with('success', 'Témoignage ajouté !');
    }


    /**
     * Display the specified resource.
     */
    public function show(testimonial $testimonial) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $testimonial = testimonial::find($id);
        return view('back.testimonials.create', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'name' => ['string', 'max:255', 'required'],
            'comment' => ['required'],
        ]);

        $testimonial = testimonial::findOrFail($id);

        $testimonial->update($validated);

        return redirect()->route('back.testimonials')->with('success', 'Témoignage mis à jour !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {

        $testimonial = testimonial::find($id);
        $testimonial->delete();
        return redirect()->route('back.testimonials')->with('success', 'Témoignage supprimé !');
    }
}
