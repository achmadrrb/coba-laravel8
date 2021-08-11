<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "Home"
        ]);
    }
    public function about()
    {
        return view('about', [
            "title" => "About",
            "name" => "Achmad Rifki",
            "email" => "eririfky29@gmail.com",
        ]);
    }
}
