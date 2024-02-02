<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function home(){
        return view('home');
    }
    public function store(){
        return view('store');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }

    public function contactForm(Request $request){
        // return $request;
        return view('contact', ['data' => $request]);
    }
}
