<?php

namespace App\Http\Controllers\Back;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\FaqMail;
use Illuminate\Support\Facades\Mail;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::all();
        return view('back.faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => ['string', 'max:255', 'required'],
            'response' => ['required', 'nullable'],
        ]);

        $data = Faq::create([
            'question' => $request->question,
            'response' => $request->response,
        ]);

        return redirect()->route('back.faqs')->with('success', 'FAQ ajouté !');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $faq = Faq::find($id);
        return view('back.faqs.create', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'question' => ['string', 'max:255', 'required'],
            'response' => ['required'],
        ]);

        $faq = Faq::findOrFail($id);

        $faq->update($validated);
        return redirect()->route('back.faqs')->with('success', 'FAQ mise à jour !');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect()->route('back.faqs');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);


        Mail::to('arsh3y@gmail.com')->send(new FaqMail($request->all()));

        return redirect()->route('faq')->with('success', 'Votre message a été envoyé avec succès.');
    }

    public function confirm()
    {
        $data = session('data');
        return view('front.confirm', compact('data'));
    }
}
