<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Agence;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\userupdateRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\userprofilRequest;

class UserController extends Controller
{
    public function contact(){
        return view('pages.contact');
    }
    public function ajouteruser()
    {
        $rl=new Role();
        $roles=getAll($rl);
        $agences=Agence::all();
        return view("adminpages.adduser",array('roles'=>$roles,'agences'=>$agences));
    }
    public function afficheusers()
    {
        $users=UserResource::collection(User::all());
        return view("adminpages.afficheusers",array('users'=>$users));
    }
    public function ajouterUsertodb(UserRequest $request)
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
            $user->agence_id=$request->input('agence');
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
        $agences=Agence::all();
        return view('adminpages.updateuser',array('user'=>$user,'roles'=>$roles,'agences'=>$agences));
    }
    // update post
    public function update($id, userupdateRequest $request)
    {
       
        $user = user::find($id);

        $user->nom=$request->input('nom');
        $user->prenom=$request->input('prenom');
        $user->addresse=$request->input('adresse');
        $user->telephone=$request->input('telephone');
        $user->role_id=$request->input('selectrole');
        $user->agence_id=$request->input('agence');
        $user->save();
        return redirect('/admin/user/afficheusers');
    }
    public function afficheCurrentUser()
    {
        $id=Auth::id();
        if($id!=0)
        {
            $users=User::find($id);
            if($users!=null)
            {
                $fullname=$users->Nom. " " .$users->prenom;                
                return view("adminpages.profil",array('users'=>$users,'fullname'=>$fullname));
            }
        }
        else
        {
           return response()->json('Ops NotFound');
        }
    }
    public function editprofil($id)
    {
        $user = user::find($id);
        $rl=new Role();
        $roles=getAll($rl);
        return view('adminpages.UpdateProfil',array('user'=>$user,'roles'=>$roles));
    }
    public function updateprofil($id, userprofilRequest $request)
    {
       
        $user = user::find($id);

        $user->nom=$request->input('nom');
        $user->prenom=$request->input('prenom');
        $user->addresse=$request->input('adresse');
        $user->email=$request->input('email');
        $user->telephone=$request->input('telephone');
        $user->password=bcrypt($request->input('mdp'));
        $user->username=$request->input('login');
        if($request->hasFile('image'))
        {
           $photo=$request->file('image')->getClientOriginalName();
           $destination=base_path() . '/public/images/users';
           $request->file('image')->move($destination,$photo);
           $user->image=$photo;
        }
        $user->save();
        return redirect('/admin/profil');
    }

}
