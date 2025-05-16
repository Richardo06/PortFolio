<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function apropos()
    {
        return view('apropos');
    }
    public function resume()
    {
        return view('resume');
    }
    
    public function contact()
    {
        return view('contact');
    }
}
