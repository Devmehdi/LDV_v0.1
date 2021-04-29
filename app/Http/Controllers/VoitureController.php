<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture;
use App\Http\Resources\VoitureResource;

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
    public function ajoutervoiture()
    {
        return view("adminpages.addvoiture");
    }
    public function affichevoiture()
    {
        $voitures=VoitureResource::collection(Voiture::all());
        return view("adminpages.affichevoiture",array('voitures'=>$voitures));
    } 
    public function ajoutervtr(Request $request)
    {
        $voiture=new Voiture();
        $voiture->voiture_nom=$request->nom;
        $voiture->matricule=$request->matricule;
        $voiture->prix=$request->prix;
        $voiture->model=$request->model;
        $voiture->Enstock=true;
        $voiture->type_id=$request->selecttype;
        $voiture->coleur_id=$request->selectcolor;
        $voiture->carburant_id=$request->selectcarburant;
        $voiture->agence_id=$request->selectagence;
        $voiture->marque_id=$request->selectmarque;
        $voiture->description=$request->description;
        $voiture->save();
        
        return redirect('/admin/voiture/ajoutervoiture');
    }
    public function destroy($id)
    {
        $voiture = Voiture::find($id);
        $voiture->Delete();
        return redirect('admin/voiture/affichevoiture');
    }
    public function edit($id)
    {
        $voiture = Voiture::find($id);
        return view('adminpages.updatevoiture',array('voiture'=>$voiture));
    }
    // update post
    public function update($id, Request $request)
    {
        $voiture = Voiture::find($id);

        $voiture=new Voiture();
        $voiture->voiture_nom=$request->input('nom');
        $voiture->matricule=$request->input('matricule');
        $voiture->prix=$request->input('prix');
        $voiture->model=$request->input('model');
        $voiture->Enstock=true;
        $voiture->type_id=$request->input('type');
        $voiture->coleur_id=$request->input('coleur');
        $voiture->carburant_id=$request->input('carb');
        $voiture->agence_id=$request->input('agence');
        $voiture->marque_id=$request->input('marque');
        $voiture->description=$request->input('description');
        $voiture->save();
        return redirect('admin/voiture/affichevoiture');
    }
}
