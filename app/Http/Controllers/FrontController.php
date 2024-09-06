<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Prof;
use App\Models\testimonial;

class FrontController extends Controller
{
    public function index()
    {
        $imagesBySection = Image::all()->groupBy('section');

        $sections = ['accueil', 'about', 'owner', 'admissions'];
        foreach ($sections as $section) {
            if (!isset($imagesBySection[$section])) {
                $imagesBySection[$section] = collect();
            }
        }

        $accueil = $imagesBySection['accueil']->first();
        $about = $imagesBySection['about']->first();
        $owner = $imagesBySection['owner']->first();
        $admissions = $imagesBySection['admissions']->first();

        $latestEvent = Event::latest('created_at')->first();

        $testimonials = testimonial::all();

        $profs = Prof::all();

        return view('front.index', compact('imagesBySection', 'accueil', 'about', 'owner', 'admissions', 'latestEvent', 'testimonials', 'profs'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function tertiaire()
    {
        return view('front.tertiaire');
    }

    public function industrielle()
    {
        return view('front.industrielle');
    }

    public function faq()
    {
        $faqs = Faq::all();
        return view('front.faq', compact('faqs'));
    }

    public function register()
    {
        return view('front.register');
    }

    public function event()
    {
        $events = Event::all();
        $lastEvent = $events->last();
        return view('front.event', compact('events', 'lastEvent'));
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function professeurs()
    {
        return view('front.professeurs');
    }
}
