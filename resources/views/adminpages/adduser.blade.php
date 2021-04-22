@extends('layouts.layoutAdmin')

@section('content')
    
	
<div class="wrapper ">
    
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
       
       <div class="champs-zk">
           <fieldset>
               <legend>Utilisateur</legend>
               <div class="row">
               <div class="col-md-6 ">

                   <label>Nom  :</label><br />
                   <input type="text">
                   <label>Prenom :</label><br />
                   <input type="text">
                   <label>Tel  :</label><br />
                   <input type="text">
                   <label>E-mail  :</label><br />
                   <input type="text">
                   <label>Adresse :</label><br />
                   <input type="text">
             

                   
                 


               </div>
                <div class="col-md-6 ">
                <label>Login :</label><br />
                   <input type="text">
                   <label>Mot de passe  :</label><br />
                   <input type="passwoed">
                   <label>Role :</label><br />
                   <input type="text">
                   <label>image :</label><br />
                   <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                   </div>
               </div>
              
           </fieldset>
       </div>

     </div>
     <!-- /Fin content-wrapper -->
</div>
@endsection