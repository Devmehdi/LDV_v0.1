@extends('layouts.layoutAdmin')

@section('content')

<div class="wrapper ">
    
    <!-- /Start content-wrapper -->
     <div class="content-wrapper">
       <div class="tit-top">
           <h4><i class="fa fa-home" aria-hidden="true"></i> Agences</h4>
       </div>	

       
   
       
       <div class="champs-zk" id="app">
           <fieldset>
               <legend>Afficher Agence</legend>
                 <div class="table-zk clearfix">
         <div class="row">
             
           <showagence-component></showagence-component>

        <div class="col-lg-6 ">
           <div class="cart-zk">
             <h3>Agence</h3>
             <!-- <ul>
               <li><label>Name :</label> <label>el harti</label></li>
               <li><label>ville :</label> <label>SPAIN</label></li>
               <li><label>adresse :</label> <label>7,207</label></li>
               <li><label>descreption :</label> <br> <P>REEFER VESSEL</p></li>
               <li><label>image :</label></li>
               
               
             </ul> -->
             <div style="padding: 10px">
             <div class="row"> 
             <div class="col-md-4">
                 <label>Name :</label> 
             </div>
               <div class="col-md-8">
                 <span> el harti </span> 
             </div>
            </div>

              <div class="row"> 
             <div class="col-md-4">
                 <label>Ville :</label> 
             </div>
               <div class="col-md-8">
                 <span> el harti </span> 
             </div>
            </div>

              <div class="row"> 
             <div class="col-md-4">
                 <label>Adreese :</label> 
             </div>
               <div class="col-md-8">
                 <span> el harti </span> 
             </div>
            </div>

              <div class="row"> 
             <div class="col-md-4">
                 <label>Description :</label> 
             </div>
               <div class="col-md-8">
                 <span> el harti </span> 
             </div>
            </div>
             <div class="row"> 
             <div class="col-md-12" style="height: 200px;">
                 <img src="images/marrakech.jpg" style="width: 100%;height: auto;">
             </div>
            </div>


        </div>

           </div>
         

         
        </div>
        </div>
        </div>
   
              
           </fieldset>
       </div>

     </div>
     <!-- /Fin content-wrapper -->
     <script src="{{ asset('js/app.js') }}"></script>
</div>
@endsection