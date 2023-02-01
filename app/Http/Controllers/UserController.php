<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Movies;

class UserController extends Controller
{
    public function home()
    {

        $movies = Movies::all();

        $data = [
            'movies' => $movies
        ];


        return view('pages.home', $data);
    }
}