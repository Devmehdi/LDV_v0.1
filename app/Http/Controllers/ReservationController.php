<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
  
    public function boitereservation()
    {
        return view("adminpages.boitereservation");
    }
   
  
}