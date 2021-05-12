<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Voiture;
use App\Models\user;
use App\Http\Resources\ReservationResource;

class ReservationController extends Controller
{
  
    public function liste()
    {
        return view("adminpages.boitereservation");
    }
    public function boitereservation()
    {
        $reservations= Reservation::all()->sortBy('confirmation');
        $reserCount= Reservation::where('confirmation','=',0);
        $count=$reserCount->count();
        return view("adminpages.boitereservation",array('reservations'=>$reservations,"count"=>$count));
    }
    public function readreservation($id)
    {
        $reservation = Reservation::find($id);
      
        if($reservation!=null)
        {
           $voiture=Voiture::find($reservation->voiture_id);
        }
        return view("adminpages.readreservation",array('reservation'=>$reservation,'voiture'=>$voiture));
    }
    public function confirm($id)
    {
        $reser=Reservation::find($id);
        $reser->confirmation=1;
        $reser->save();

        return redirect('/admin/Reserv/boitereservation');
    }
}