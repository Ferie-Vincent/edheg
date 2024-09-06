<?php

namespace App\Http\Controllers;

use App\Models\Image;

class AdminController extends Controller
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

        return view('back.dashboard', compact('imagesBySection'));
    }
}
