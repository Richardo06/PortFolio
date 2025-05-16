<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function projet()
    {
        return view('./projets/projet');
    }
    public function detailTicket()
    {
        return view('./projets/detailTicket');
    }
    public function detailLogistique()
    {
        return view('./projets/detailLogistique');
    }
}
