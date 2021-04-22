<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function contact(){
        return view('pages.contact');
    }
    public function ajouteruser()
    {
        return view("adminpages.adduser");
    }
    public function afficheusers()
    {
        return view("adminpages.afficheusers");
    }
}
