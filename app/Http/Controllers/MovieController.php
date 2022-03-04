<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    public function index() {
        $data_movie = Movie::all();
        
        return view('welcome', compact('data_movie'));
    }
}
