@extends('layouts.layoutAdmin')

@section('content')
    
	
<div class="wrapper ">
    
    <!-- /Start content-wrapper -->
     <div class="content-wrapper">
       <div class="tit-top">
           <h4><i class="fa fa-home" aria-hidden="true"></i> Agences</h4>
       </div>	

       
       <div class="selector-zk">
           <div class="col-md-12 border-zk">
               <div class="col-md-12 button-zk">
                   <button><i class="fa fa-plus" aria-hidden="true"></i></button>
                   <button><i class="fa fa-pencil" aria-hidden="true"></i></button>
                
               </div>
           </div>
       </div>
       <div id="app">
           <agence-component></agence-component>
       </div>
     </div>
     <!-- /Fin content-wrapper -->
     <script src="{{ asset('js/app.js') }}"></script>
</div>
@endsection