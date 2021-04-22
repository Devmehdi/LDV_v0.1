<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agence;
use App\Http\Resources\AgenceResource;

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

    public function ajouterAgc(Request $request)
    {
        $agence=new Agence();
        $agence->agence_name=$request->nom;
        $agence->agences_tel=$request->telephone;
        $agence->ville=$request->ville;
        $agence->addresse=$request->adresse;
        $agence->description=$request->description;
        $agence->save();
        
        return response()->json("done",200);
    }
    public function getallagence()
    {
        return AgenceResource::collection(Agence::all());
    }

    public function afficheagence()
    {
        return view("adminpages.afficheagence");
    }
  
}
