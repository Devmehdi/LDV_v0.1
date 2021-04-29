@extends('layouts.layoutAdmin')

@section('content')
    
	
<div class="wrapper" id="app">
    
    <!-- /Start content-wrapper -->
     <div class="content-wrapper">
       <div class="tit-top">
           <h4><i class="fa fa-user" aria-hidden="true"></i> Utilisateur</h4>
       </div>	

       
       <div class="selector-zk">
           <div class="col-md-12 border-zk">
               <div class="col-md-12 button-zk">
                   <button><i class="fa fa-plus" aria-hidden="true"></i></button>
                   <button><i class="fa fa-pencil" aria-hidden="true"></i></button>
                   

               </div>

              
           </div>
       </div>
       
       <form action="{{url('admin/user/'.$user->id)}}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <div class="champs-zk">
          <fieldset>
              <legend>Utilisateur</legend>
              <div class="row">
              <div class="col-md-6 ">

                  <label>Nom  :</label><br />
                  <input type="text" name="nom" value="{{$user->nom}}">
                       <div>
                           <span style="color:red; font-size:13px">*</span>
                        </div>
                  <label>Prenom :</label><br />
                  <input type="text" name="prenom" value="{{$user->prenom}}">
                  <div>
                           <span style="color:red; font-size:13px"> *</span>
                       </div>
                  <label>Tel  :</label><br />
                  <input type="text" name="telephone" value="{{$user->telephone}}">
                  <div>
                           <span style="color:red; font-size:13px"> *</span>
                       </div>
                  <label>E-mail  :</label><br />
                  <input type="email" name="email" value="{{$user->email}}">
                  <div>
                           <span style="color:red; font-size:13px"> *</span>
                       </div>
                  <label>Adresse :</label><br />
                  <input type="text" name="adresse" value="{{$user->addresse}}">

              </div>
               <div class="col-md-6 ">
                  <label>Login :</label><br />
                  <input type="text" name="login" value="{{$user->username}}">
                     <div>
                           <span style="color:red; font-size:13px"> *</span>
                       </div>
                  <label>Mot de passe  :</label><br />
                  <input type="password" name="mdp" value="{{$user->password}}">
                  <div>
                           <span style="color:red; font-size:13px"> *</span>
                       </div>
                  <label>Confirmé Mot de passe  :</label><br />
                  <input type="password" name="cmdp" value="{{$user->password}}">
                  <div>
                           <span style="color:red; font-size:13px"> *</span>
                       </div>
                   <label>Selectionner le role :</label><br />
                  <select name="selectrole">
                      <option selected>Selectionner le role</option>
                      <option value="1">test</option>
                       <option value="2">test1</option>
                  </select>
                  <div>
                           <span style="color:red; font-size:13px"> *</span>
                       </div>
                  <label>image :</label><br />
                    <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                  </div>
              </div>
                        <button class="btn btn-primary">Submit</button>
                         <a href="/admin/user/afficheusers" class="btn btn-secondary">Annuler</a>
          </fieldset>
      </div>
   </form>

     </div>
     <!-- /Fin content-wrapper -->
     
</div>
<script src="{{ asset('js/app.js') }}"></script>
@endsection