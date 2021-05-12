<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Agence;
use App\Models\Coleur;
use App\Models\Carburant;
use App\Models\Marque;
use App\Http\Resources\AgenceResource;
use App\Http\Requests\AgenceRequest;

class AgenceController extends Controller
{
    public function liste()
    {
        $agences= AgenceResource::collection(Agence::all());
        return view("pages.agence",array('agences'=>$agences));
    }
    public function ajouteragence()
    {
        return view("adminpages.addagence");
    }
    public function ajouterAgc(AgenceRequest $request)
    {
        $agence=new Agence();
        $agence->agence_name=$request->input('nom');
        $agence->agences_tel=$request->input('telephone');
        $agence->ville=$request->input('ville');
        $agence->addresse=$request->input('adresse');
        $agence->description=$request->input('description');
        if($request->hasFile('image'))
        {
           $photo=$request->file('image')->getClientOriginalName();
           $destination=base_path() . '/public/images/agences';
           $request->file('image')->move($destination,$photo);
           $agence->image=$photo;
        }
        $agence->save();
        
        return redirect('/admin/agence/afficheagence')->with('message','Data added Successfully');
    }
    public function getallagence()
    {
        return AgenceResource::collection(Agence::all());
    }
    public function test()
    {
        return view('pages.test');
    }
      public function dashboard()
    {
        return view('pages.dashboard');
    }
    public function afficheagence($id=0)
    {
        if($id==0)
        {
            $agences=AgenceResource::collection(Agence::all());
            return view("adminpages.afficheagence",array('agences'=>$agences));
        }
        else{
            $agence = Agence::find($id);
            return view("adminpages.afficheagence",array('agence'=>$agence));
        }
    }
    public function GetAgenceById($id)
    {
        $agence=new Agence();
        return getById($agence,$id);
    }
    public function details($id)
    {
        $agc = Agence::find($id);
        return view('adminpages.afficheagence',array('agc'=>$agc));
    } 
    public function destroy($id)
    {
        $agence = Agence::find($id);
        $agence->Delete();
        return redirect('/admin/agence/afficheagence');
    }
    public function edit($id)
    {
        $agence = Agence::find($id);
        return view('adminpages.updateagence',array('agence'=>$agence));
    }
 
    // update post
    public function update($id, AgenceRequest $request)
    {
        $agence = Agence::find($id);

        $agence->agence_name=$request->input('nom');
        $agence->ville=$request->input('ville');
        $agence->addresse=$request->input('adresse');
        $agence->agences_tel=$request->input('telephone');
        $agence->description=$request->input('description');
        if($request->hasFile('image'))
        {
           $photo=$request->file('image')->getClientOriginalName();
           $destination=base_path() . '/public/images/agences';
           $request->file('image')->move($destination,$photo);
           $agence->image=$photo;
        }
       
        $agence->save();
        return redirect('/admin/agence/afficheagence')->with('message','Data added Successfully');
    }
  
}
