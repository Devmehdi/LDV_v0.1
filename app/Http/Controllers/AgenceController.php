<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgenceController extends Controller
{
    public function liste()
    {
        return view("pages.agence");
    }
    public function ajouteragence()
    {
        return view("adminpages.addagence");
    }
    public function afficheagence()
    {
        return view("adminpages.afficheagence");
    }
  
}
