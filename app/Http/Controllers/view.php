<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class view extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function qui()
    {
        return view('qui');
    }
}
