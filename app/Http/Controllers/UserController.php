<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function contact(){
        return view('pages.contact');
    }
    public function ajouteruser()
    {
        $rl=new Role();
        $roles=getAll($rl);
        return view("adminpages.adduser",array('roles'=>$roles));
    }
    public function afficheusers()
    {
        $users=UserResource::collection(User::all());
        return view("adminpages.afficheusers",array('users'=>$users));
    }
    public function ajouterUsertodb(Request $request)
    {
        $user=new User();
        $user->nom=$request->input('nom');
        $user->telephone=$request->input('telephone');
        $user->username=$request->input('login');
        $user->addresse=$request->input('adresse');
        $user->email=$request->input('email');
        $user->password=bcrypt($request->input('mdp'));
        $user->prenom=$request->input('prenom');
        $user->role_id=$request->input('selectrole');
        if($request->hasFile('image'))
        {
           $photo=$request->file('image')->getClientOriginalName();
           $destination=base_path() . '/public/images/users';
           $request->file('image')->move($destination,$photo);
           $user->image=$photo;
        }
        $user->save();
        
        return redirect("/admin/user/afficheusers");
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
        $rl=new Role();
        $roles=getAll($rl);
        return view('adminpages.updateuser',array('user'=>$user,'roles'=>$roles));
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
        if($request->hasFile('image'))
        {
           $photo=$request->file('image')->getClientOriginalName();
           $destination=base_path() . '/public/images/users';
           $request->file('image')->move($destination,$photo);
           $user->image=$photo;
        }
        $user->save();
        return redirect('/admin/user/afficheusers');
    }
}
