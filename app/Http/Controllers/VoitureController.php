<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture;
use App\Models\Coleur;
use App\Models\Carburant;
use App\Models\Marque;
use App\Models\Agence;
use App\Http\Resources\VoitureResource;
use App\Http\Requests\VoitureRequest;
use App\Models\Type;
use App\Models\Ville;

class VoitureController extends Controller
{
    public function index()
    {
        $voitures=Voiture::all()->take(4);
        if($voitures!=null)
        {
            return view("welcome",array('voitures'=>$voitures));
        }
        return view("welcome");
    }
    public function details($id)
    {
        $voiture = Voiture::find($id);
        if($voiture!=null)
        {
            $carb=Carburant::find($voiture->carburant_id);
            return view("pages.detailsvoiture",array('voiture'=>$voiture,'carb'=>$carb));
        }
        
    }
    public function getallcoleur()
    {
        $coleur=Coleur::all();
        return response()->json($coleur);
    }
    public function getallmarque()
    {
        $marque=marque::all();
        return response()->json($marque);
    }
    public function getallatype()
    {
        $type=Carburant::all();
        return response()->json($type);
    }
    public function liste()
    {
        $voitures=Voiture::all();
        if($voitures!=null)
        {
            return view("pages.listevoitures",array('voitures'=>$voitures));
        }
        return view("pages.listevoitures");
        
    }
    public function ajoutervoiture()
    {
        $marqs=new Marque();
        $cols=new Coleur();
        $carb=new Carburant();
        $ags=new Agence();
        $coleurs=getAll($cols);
        $marques=getAll($marqs);
        $carburants=getAll($carb);
        $agences=getAll($ags);
        return view("adminpages.addvoiture",array('coleurs'=>$coleurs,'marques'=>$marques,'carburants'=>$carburants,'agences'=>$agences));
    }
    public function affichevoiture()
    {
        $voitures=VoitureResource::collection(Voiture::all());
        $villes=Ville::all();
        $coleurs=Coleur::all();
        $marques=Marque::all();
        return view("adminpages.affichevoiture",array('voitures'=>$voitures,'villes'=>$villes,'coleurs'=>$coleurs,'marques'=>$marques));
    } 
    public function ajoutervtr(VoitureRequest $request)
    {
        $voiture=new Voiture();
        $voiture->voiture_nom=$request->input('nom');
        $voiture->matricule=$request->input('matricule');
        $voiture->prix=$request->input('prix');
        $voiture->KM=$request->input('KM');
      //  $voiture->seats=$request->input('seats');
        //$voiture->Luggage=$request->input('Luggage');
        if($request->hasFile('image'))
        {
           $photo=$request->file('image')->getClientOriginalName();
           $destination=base_path() . '/public/images/voitures';
           $request->file('image')->move($destination,$photo);
           $voiture->image=$photo;
        }
        $voiture->model=$request->input('model');
        $voiture->Enstock=true;
        $voiture->categorie=$request->input('selecttype');
        $voiture->coleur_id=$request->input('selectcolor');
        $voiture->carburant_id=$request->input('selectcarburant');
        $voiture->agence_id=$request->input('selectagence');
        $voiture->marque_id=$request->input('selectmarque');
        $voiture->description=$request->input('description');
        $voiture->save();
        
        return redirect('/admin/voiture/affichevoiture');
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
        $marqs=new Marque();
        $cols=new Coleur();
        $carb=new Carburant();
        $ags=new Agence();
        $coleurs=getAll($cols);
        $marques=getAll($marqs);
        $carburants=getAll($carb);
        $agences=getAll($ags);
        return view('adminpages.updatevoiture',array('voiture'=>$voiture,'coleurs'=>$coleurs,'marques'=>$marques,'carburants'=>$carburants,'agences'=>$agences));
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
        $voiture->categorie=$request->input('selecttype');
        $voiture->coleur_id=$request->input('selectcolor');
        $voiture->KM=$request->input('KM');
        $voiture->carburant_id=$request->input('selectcarburant');
        $voiture->agence_id=$request->input('selectagence');
        $voiture->marque_id=$request->input('selectmarque');
        $voiture->description=$request->input('description');
        if($request->hasFile('image'))
        {
           $photo=$request->file('image')->getClientOriginalName();
           $destination=base_path() . '/public/images/voitures';
           $request->file('image')->move($destination,$photo);
           $voiture->image=$photo;
        }
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
    public function ajoutertpe(Request $request)
    {

        $ville=new Ville();
        $ville->designation=$request->nom;
        $ville->statut=$request->selected;
        $ville->save();
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
        $ville = Ville::find($id);
        return view('adminpages.updatetype',array('ville'=>$ville));
    }
    // update post
    public function updatetype($id, Request $request)
    {
        $ville = Ville::find($id);
        $ville->designation=$request->input('nom');
        $ville->statut=$request->input('selected');
        $ville->save();
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
