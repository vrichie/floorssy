<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function about(){
        return view('home.about',['page'=>'About Us']);
    }

    public function gallery(){
        return view('home.gallery');
    }

    public function pricing(){
        return view('home.pricing');
    }

    public function contacts(){
        return view('home.contacts');
    }
}
