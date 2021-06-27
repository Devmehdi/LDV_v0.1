<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Voiture;
use App\Models\Notification;
use App\Models\user;
use App\Http\Resources\ReservationResource;
use Illuminate\Support\Facades\Auth;
use DB;

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
    public function Archive($id)
    {
            $Reservation = Reservation::find($id);
            $Reservation->Delete();
            return redirect('/admin/Reserv/boitereservation/demandeconfirmer');
    }
    public function Facturetion($id)
    {
        $Reservation = Reservation::find($id);
        $getvoiture=Voiture::find($Reservation->voiture_id);
        $getuser=User::find($Reservation->user_id);
        $getagence=Agence::find($getvoiture->agence_id);
        return view('adminpages.facture',array('reservation'=>$Reservation,"getvoiture"=>$getvoiture,'getuser'=>$getuser,"getagence"=>$getagence));
    }
    public function ListeDemande()
    {
        $reservations= Reservation::where(['Confirmation'=>1, 'deleted_at'=>null])->get();
        $demandearchive= DB::table('reservations')->where('deleted_at', '<>', NULL)->get();
        return view("adminpages.demandeconfirmer",array('reservations'=>$reservations,'demandearchive'=>$demandearchive));
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
                    ('Demande de voiture');
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
                    ('Demande de voiture');
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
            $agences=Agence::all();
            return view('pages.reservation',array('voiture'=>$voiture,'agences'=>$agences));
    }
    public function reserver(Request $request)
    {
        $voiture=new Voiture();
        $agences=new Agence();
        if(Auth::user())
        {
            $reservation=new Reservation();
            $notif=new Notification();
            $to = \Carbon\Carbon::createFromFormat('Y-m-d',  $request->input('datedebut'));
            $from = \Carbon\Carbon::createFromFormat('Y-m-d', $request->input('datefin'));
            $diff_in_days = $to->diffInDays($from);
            $price=$request->input('prix');
            return dd($diff_in_days);
            $reservation->fullname=$request->input('nom');
            $reservation->prix= ($price * $diff_in_days);
            $reservation->confirmation=0;
            $reservation->duree=$diff_in_days;
            $reservation->voiture_id=$request->input('id');
            $reservation->user_id=Auth::id();
            $reservation->date_reservation=\Carbon\Carbon::now();
            $reservation->date_debut=$request->input('datedebut');
            $reservation->date_fin=$request->input('datefin');
            $reservation->agencedepart=$request->input('agencedepart');
            $reservation->agencefin=$request->input('agencefin');
            $reservation->save();

            $lastreservation= Reservation::orderBy('id','desc')->first();
            $getVoiture=Voiture::find($lastreservation->voiture_id);
            $getAgence=Agence::find($getVoiture->agence_id);
            $notif->reservation_id=$lastreservation->id;
            $notif->agence_id=$getAgence->id;
            $notif->isOpen=0;
            $notif->activeflage=0;
            $notif->save();
            return view('pages.reservation',array('voiture'=>$voiture,'agences'=>$agences))->with('message','votre demande a été enregistrer');
        }
        else{
            $reservation=new Reservation();
            $notif=new Notification();
            $to = \Carbon\Carbon::createFromFormat('Y-m-d',  $request->input('datedebut'));
            $from = \Carbon\Carbon::createFromFormat('Y-m-d', $request->input('datefin'));
            $diff_in_days = $to->diffInDays($from);
            $price=$request->input('prix');
            $reservation->fullname=$request->input('nom');
            $reservation->email=$request->input('email');
            $reservation->prix= ($price * $diff_in_days);
            $reservation->telephone=$request->input('telephone');
            $reservation->confirmation=0;
            $reservation->duree=$diff_in_days;
            $reservation->voiture_id=$request->input('id');
            $reservation->user_id=0;
            $reservation->date_reservation=\Carbon\Carbon::now();
            $reservation->date_debut=$request->input('datedebut');
            $reservation->date_fin=$request->input('datefin');
            $reservation->agencedepart=$request->input('agencedepart');
            $reservation->agencefin=$request->input('agencefin');
            $reservation->save();

            $lastreservation= Reservation::orderBy('id','desc')->first();
            $getVoiture=Voiture::find($lastreservation->voiture_id);
            $getAgence=Agence::find($getVoiture->agence_id);
            $notif->reservation_id=$lastreservation->id;
            $notif->agence_id=$getAgence->id;
            $notif->isOpen=0;
            $notif->activeflage=0;
            $notif->save();
            return redirect('liste')->with('message','votre demande a été enregistrer');
            //return view('pages.reservation',array('voiture'=>$voiture,'agences'=>$agences))->with('message','votre demande a été enregistrer');
        }
       
    }
    public function UPdate($id)
    {
        $reservat = Reservation::find($id);
        $reservat->deleted_at=NULL;
        $reservat->save();
        return Redirect('admin/Reserv/boitereservation/demandeconfirmer');
    }
}