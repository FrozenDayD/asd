<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
        return view('home');
    }

    public function getMovies(){
        return view('movies');
    }

    public function getContact(){
        return view('contact');
    }
}
