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
        <form action="{{url('voiture/'.$voiture->id)}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @csrf
           <fieldset>
               <legend>Modifier Voiture</legend>
               <div class="row">
               <div class="col-md-6 ">

                   <label>Nom  :</label><br />
                   <input type="text" name="nom" value="{{$voiture->voiture_nom}}">
                   <label>Type :</label><br />
                    <select name="type">
                       <option value="1">type1</option>
                   </select>
                        <div>
                            <span style="color:red;font-size:13px"></span>
                        </div>
                   <label>Marque :</label><br />
                    <select name="marque">
                       <option value="1">marque</option>
                   </select>
                    <label>Matricule  :</label><br />
                   <input type="text" name="matricule" value="{{$voiture->matricule}}">
                   <label>Model :</label><br />
                   <input type="text" name="model" value="{{$voiture->model}}">
                   
                   <label>Carburant :</label><br />
                    <select name="carb">
                       <option value="1">carb</option>
                   </select>
                   <label>Color :</label><br />
                   <select name="coleur">
                       <option value="1">red</option>
                   </select>
                   <label>Agence :</label><br />
                   <select name="agence">
                       <option value="1">agence</option>
                   </select>

               </div>
                <div class="col-md-6 ">
                <label>prix :</label><br />
                   <input type="text" name="prix" value="{{$voiture->prix}}">
                <label>Description :</label>
                   <textarea rows="6" name="description" value="">{{$voiture->description}}</textarea>
                   <label>image :</label><br />
                   <input type="file" id="avatar" name="image" accept="image/png, image/jpeg">
                   </div>
               </div>
                    <button class="btn btn-primary">Submit</button>
                    <a href="{{url('admin/voiture/affichevoiture')}}" class="btn btn-secondary" >Annuler</a>
           </fieldset>
           </form>
       </div>

     </div>
     <!-- /Fin content-wrapper -->
</div>

@endsection