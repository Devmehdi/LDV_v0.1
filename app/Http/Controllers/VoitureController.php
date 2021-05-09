<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture;
use App\Models\Coleur;
use App\Models\Carburant;
use App\Models\Marque;
use App\Http\Resources\VoitureResource;
use App\Models\Type;

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
        $carburants=Carburant::all();
        $coleurs=Coleur::all();
        $marques=Marque::all();
        return view("adminpages.affichevoiture",array('voitures'=>$voitures,'carburants'=>$carburants,'coleurs'=>$coleurs,'marques'=>$marques));
    } 
    public function ajoutervtr(Request $request)
    {
        $voiture=new Voiture();
        $voiture->voiture_nom=$request->input('nom');
        $voiture->matricule=$request->input('matricule');
        $voiture->prix=$request->input('prix');
        $voiture->model=$request->input('model');
        $voiture->Enstock=true;
        $voiture->type_id=$request->input('selecttype');
        $voiture->coleur_id=$request->input('selectcolor');
        $voiture->carburant_id=$request->input('selectcarburant');
        $voiture->agence_id=$request->input('selectagence');
        $voiture->marque_id=$request->input('selectmarque');
        $voiture->description=$request->input('description');
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
    public function ajoutercoleur(Request $request){

        return view('adminpages.addcoleur');
    }
    public function ajouterclr(Request $request){
        $coleur=new Coleur();
        $coleur->coleur=$request->nom;
        $coleur->statut=$request->selected;
        $coleur->save();
        return redirect('admin/voiture/affichevoiture');
    }
    public function ajoutertype(Request $request){

        return view('adminpages.ajoutertype');
    }
    public function ajoutertpe(Request $request){
        $carb=new Carburant();
        $carb->type_carburant=$request->nom;
        $carb->statut=$request->selected;
        $carb->save();
        return redirect('admin/voiture/affichevoiture');
    }
    public function ajoutermarque(Request $request){

        return view('adminpages.addmarque');
    }
    public function ajoutermrq(Request $request){
        $marque=new Marque();
        $marque->marque=$request->nom;
        $marque->statut=$request->selected;
        $marque->save();
        return redirect('admin/voiture/affichevoiture');
    }
    public function edittype($id)
    {
        $carburant = Carburant::find($id);
        return view('adminpages.updatetype',array('carburant'=>$carburant));
    }
    // update post
    public function updatetype($id, Request $request)
    {
        $carburant = Carburant::find($id);

        $carburant->type_carburant=$request->input('nom');
        $carburant->statut=$request->input('selected');
        $carburant->save();
        return redirect('admin/voiture/affichevoiture');
    }
    public function editmarque($id)
    {
        $marque = Marque::find($id);
        return view('adminpages.updatemarque',array('marque'=>$marque));
    }
    // update post
    public function updatemarque($id, Request $request)
    {
        $marque = Marque::find($id);

        $marque->marque=$request->input('nom');
        $marque->statut=$request->input('selected');
        $marque->save();
        return redirect('admin/voiture/affichevoiture');
    }
    public function editcoleur($id)
    {
        $coleur = Coleur::find($id);
        return view('adminpages.updatecoleur',array('coleur'=>$coleur));
    }
    // update post
    public function updatecoleur($id, Request $request)
    {
        $coleur = Coleur::find($id);

        $coleur->coleur=$request->input('nom');
        $coleur->statut=$request->input('selected');
        $coleur->save();
        return redirect('admin/voiture/affichevoiture');
    }
}
