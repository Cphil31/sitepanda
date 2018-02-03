<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class view extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function qui()
    {
        return view('qui');
    }

    public function diaporama()
    {
        return view('diaporama');
    }

    public function contact()
    {
        return view('contact');
    }
    public function video()
    {
        return view('video');
    }
}
