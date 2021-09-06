<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StarController extends Controller
{
    public function index()
    {
        return view('star.index');
    }
     
     
    public function sun()
    {
        return view('star.sun');
    }
     
     
    public function moon()
    {
        return view('star.moon');
    }
}
