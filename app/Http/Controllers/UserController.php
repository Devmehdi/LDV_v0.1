<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function contact(){
        return view('pages.contact');
    }
    public function ajouteruser()
    {
        return view("adminpages.adduser");
    }
    public function afficheusers()
    {
        $users=UserResource::collection(User::all());
        return view("adminpages.afficheusers",array('users'=>$users));
    }
    public function ajouterUsertodb(Request $request)
    {
        $user=new User();
        $user->nom=$request->nom;
        $user->telephone=$request->telephone;
        $user->username=$request->login;
        $user->addresse=$request->adresse;
        $user->email=$request->email;
        $user->password=bcrypt($request->mdp);
        $user->prenom=$request->prenom;
        $user->role_id=$request->selectrole;
        $user->save();
        
        return response()->json("done",200);
    }
    public function destroy($id)
    {
        $user = user::find($id);
        $user->Delete();
        return redirect('admin/user/afficheusers');
    }
    public function edit($id)
    {
        $user = user::find($id);
        return view('adminpages.updateuser',array('user'=>$user));
    }
    // update post
    public function update($id, Request $request)
    {
       
        $user = user::find($id);

        $user->nom=$request->input('nom');
        $user->prenom=$request->input('prenom');
        $user->addresse=$request->input('adresse');
        $user->email=$request->input('email');
        $user->telephone=$request->input('telephone');
        $user->password=bcrypt($request->input('mdp'));
        $user->username=$request->input('login');
        $user->role_id=$request->input('selectrole');
        $user->save();
        return redirect('/admin/user/afficheusers');
    }
}
