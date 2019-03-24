<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $services = ['Assassinations', 'Soul Searching', 'Software Development',
            'Biker Gang', 'Procastinating', 'Finding Beauty in the Ugly',
            'Sick and tired', 'I hate life', 'Power', 'Magic', 'Cardo Dalisay'
        ];

        return view('pages.services', compact('services'));
    }
}
