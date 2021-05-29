<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Models\Role;
use App\Models\Voiture;
use App\Models\User;
use App\Models\Agence;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
       
            $id=Auth::id();
            $User=User::find($id);
            if($User->role_id!=NULL)
            {
                if($User!=null)
                {
                   // $voiture_id=$User->voiture_id;
                    //$Voiture=Voiture::find($voiture_id);
                    //$agence=$Voiture->agence_id;
                     $role_id=$User->role_id;
                    if($User->role_id==1)
                    {
                        $reservation=Reservation::where('Confirmation' ,'=','1')->get();
                        $voiture = Reservation::select("voiture_id", DB::raw("count(*) as voiture_count"))->where('Confirmation' ,'=','1')
                        ->orderBy('voiture_count','desc')
                        ->groupBy('voiture_id')
                        ->first();
                        $voiturename=Voiture::find($voiture->voiture_id);
                        $voitureagence_id=Voiture::find($voiture->voiture_id);
                        $agencename=Agence::find($voitureagence_id->agence_id);
                        $totalPrice=Reservation::where('Confirmation' ,'=','1')->sum('prix');
                        $totalPriceallagence=Reservation::where('Confirmation' ,'=','1')->sum('prix');
                        $totalPricenoconfirmer=Reservation::where('Confirmation' ,'=','0')->sum('prix');
                        $countvoiture=Reservation::where('Confirmation' ,'=','0')->count();
                        $width2=$totalPricenoconfirmer/5;
                        $width=$totalPriceallagence/5;
                        if($reservation!=null)
                        {
                            $count=$reservation->count();
                            return view("adminpages.dashboard",array('count'=>$count, 'totalPricenoconfirmer'=>$totalPricenoconfirmer,'countvoiture'=>$countvoiture,'width'=>$width,'width2'=>$width2,'totalPriceallagence'=>$totalPriceallagence,'role_id'=>$role_id,'agencename'=>$agencename,'voiturename'=>$voiturename,'totalPrice'=>$totalPrice));
                        }
                        else
                        {
                            $count=0;
                            $totalPrice=0;
                            $voiturename=null;
                            return view("adminpages.dashboard",array('count'=>$count, 'totalPricenoconfirmer'=>$totalPricenoconfirmer,'countvoiture'=>$countvoiture, 'width'=>$width, 'width2'=>$width2,'totalPriceallagence'=>$totalPriceallagence,'role_id'=>$role_id,'voiturename'=>$voiturename,'totalPrice'=>$totalPrice));
                        }
                       
                    }
                    else
                    {
                        $voiture = Reservation::select("voiture_id", DB::raw("count(*) as voiture_count"))->where(['Confirmation'=>1, 'user_id'=>Auth::id()])
                        ->orderBy('voiture_count','desc')
                        ->groupBy('voiture_id')
                        ->first();
                           $voiturename=Voiture::find($voiture->voiture_id);
                           $reservation=Reservation::where(['Confirmation'=>1, 'user_id'=>Auth::id()])->get();
                           $totalPrice=Reservation::where(['Confirmation'=>1, 'user_id'=>Auth::id()])->sum('prix');
                           $totalPriceallagence=Reservation::where('Confirmation' ,'=','1')->sum('prix');
                           $countvoiture=Reservation::where('Confirmation' ,'=','0')->count();
                           $width=$totalPriceallagence/5;
                           $totalPricenoconfirmer=Reservation::where('Confirmation' ,'=','0')->sum('prix');
                           $width2=$totalPricenoconfirmer/5;
                        if($reservation!=null)
                        {
                            $count=$reservation->count();
                            return view("adminpages.dashboard",array('count'=>$count,'totalPricenoconfirmer'=>$totalPricenoconfirmer,'countvoiture'=>$countvoiture,'width'=>$width,'width2'=>$width2,'totalPriceallagence'=>$totalPriceallagence, 'role_id'=>$role_id,'voiturename'=>$voiturename,'totalPrice'=>$totalPrice));
                        }
                        else
                        {
                            $count=0;
                            $totalPrice=0;
                            return view("adminpages.dashboard",array('count'=>$count, 'totalPricenoconfirmer'=>$totalPricenoconfirmer,'countvoiture'=>$countvoiture, 'width'=>$width,'width2'=>$width2,'totalPriceallagence'=>$totalPriceallagence, 'role_id'=>$role_id,'voiturename'=>$voiturename,'totalPrice'=>$totalPrice));
                        }
                       
                    }
                   
                }
               
            }
            else
            {
                return redirect('/index');
            }
            
    }
}
