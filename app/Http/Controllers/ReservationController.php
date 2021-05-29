<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Voiture;
use App\Models\user;
use App\Http\Resources\ReservationResource;
use Illuminate\Support\Facades\Auth;

use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Agence;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Foundation\Auth\User as AuthUser;

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
            if($reservation->user_id!=0)
            {

            $voiture=Voiture::find($reservation->voiture_id);
            $agence= Agence::find($voiture->agence_id);
            $user=User::find($reservation->user_id);
            $fullname=$reservation->fullname;
            $data = array('name'=>$fullname,'voiture'=>$voiture->voiture_nom,'agence'=>$agence->agence_name,'date'=>$reservation->date_reservation);
        
            /* Mail::send('mail', ['user' => $reservation],$data, function ($message) use ($reservation) {
                $message->from('laravelsmtp34@gmail.com', 'Your Application');
                $message->to('mehdiraja328@gmail.com', $reservation->fullname)->subject('Welcome to laravel');
            });*/
            Mail::send(['text'=>'mail','reservation' => $reservation,'user' =>$user], $data, function($message) use ($reservation,$user){
                $message->to($user->email , $reservation->fullname)->subject
                    ('Laravel Basic Testing Mail');
                $message->from('laravelsmtp34@gmail.com','Support Voiture d\'or');
            });
         
        }
        else
        {
            $voiture=Voiture::find($reservation->voiture_id);
            $agence= Agence::find($voiture->agence_id);
            $user=User::find($reservation->user_id);
            $fullname=$reservation->fullname;
            $data = array('name'=>$fullname,'voiture'=>$voiture->voiture_nom,'agence'=>$agence->agence_name,'date'=>$reservation->date_reservation);
        
            /* Mail::send('mail', ['user' => $reservation],$data, function ($message) use ($reservation) {
                $message->from('laravelsmtp34@gmail.com', 'Your Application');
                $message->to('mehdiraja328@gmail.com', $reservation->fullname)->subject('Welcome to laravel');
            });*/
            Mail::send(['text'=>'mail','reservation' => $reservation], $data, function($message) use ($reservation){
                $message->to($reservation->email , $reservation->fullname)->subject
                    ('Laravel Basic Testing Mail');
                $message->from('laravelsmtp34@gmail.com','Support Voiture d\'or');
            });
        }
    }
        return view("adminpages.readreservation",array('reservation'=>$reservation,'voiture'=>$voiture));
    }
    public function confirm($id)
    {
        $reser=Reservation::find($id);
        $reser->confirmation=1;
        $reser->user_id=Auth::id();
        $reser->save();

        return redirect('/admin/Reserv/boitereservation');
    }
    //Partie user

    public function getvoiturebyid($id)
    {
            $voiture = Voiture::find($id);
            return view('pages.reservation',array('voiture'=>$voiture));
    }
    public function reserver(Request $request)
    {
        $voiture=new Voiture();
        if(Auth::user())
        {
            $reservation=new Reservation();
            $reservation->fullname=$request->input('nom');
            $reservation->prix=$request->input('prix');
            $reservation->confirmation=0;
            $reservation->duree=3;
            $reservation->voiture_id=$request->input('id');
            $reservation->user_id=Auth::id();
            $reservation->date_reservation="2021-05-29 12:07:11";
            $reservation->date_debut=$request->input('datedebut');
            $reservation->date_fin=$request->input('datefin');
            $reservation->save();
            return view('pages.reservation',array('voiture'=>$voiture))->with('message','votre demande a été enregistrer');
        }
        else{
            $reservation=new Reservation();
            $reservation->fullname=$request->input('nom');
            $reservation->email=$request->input('email');
            $reservation->prix=$request->input('prix');
            $reservation->telephone=$request->input('telephone');
            $reservation->confirmation=0;
            $reservation->duree=3;
            $reservation->voiture_id=$request->input('id');
            $reservation->user_id=0;
            $reservation->date_reservation="2021-05-29 12:07:11";
            $reservation->date_debut=$request->input('datedebut');
            $reservation->date_fin=$request->input('datefin');
            $reservation->save();
            return view('pages.reservation',array('voiture'=>$voiture))->with('message','votre demande a été enregistrer');;
        }
       
    }
}