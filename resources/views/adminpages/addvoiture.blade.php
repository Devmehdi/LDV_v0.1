@extends('layouts.layoutAdmin')

@section('content')
    
	
<div class="wrapper ">
    
    <!-- /Start content-wrapper -->
     <div class="content-wrapper">
       <div class="tit-top">
           <h4><i class="fa fa-car" aria-hidden="true"></i> Voiture</h4>
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
               <legend>Ajouter Voiture</legend>
               <div class="row">
               <div class="col-md-6 ">

                   <label>Nom  :</label><br />
                   <input type="text">
                   <label>Type :</label><br />
                   <input type="text">
                   <label>Marque :</label><br />
                   <input type="text">
                   <label>Model :</label><br />
                   <input type="text">
                   <label>Carburant :</label><br />
                   <input type="text">
                   <label>Color :</label><br />
                   <input type="text">

    
                   


               </div>
                <div class="col-md-6 ">
                <label>prix :</label><br />
                   <input type="text">
                <label>Description :</label>
                   <textarea rows="6"></textarea>
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