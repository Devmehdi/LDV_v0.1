<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function index()
    {
        return view("pages.index");
    }
    public function details()
    {
        return view("pages.detailsvoiture");
    }
    public function liste()
    {
        return view("pages.listevoitures");
    }
}
