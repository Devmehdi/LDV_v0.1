@extends('layouts.layoutAdmin')

@section('content')
    
	
<div class="wrapper " id="app">
    
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
       
       <voiture-component></voiture-component>

     </div>
     <!-- /Fin content-wrapper -->
</div>
<script src="{{ asset('js/app.js') }}"></script>
@endsection