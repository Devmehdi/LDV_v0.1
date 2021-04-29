@extends('layouts.layoutAdmin')

@section('content')
<link rel="stylesheet" type="text/css" 
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
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
       <div>
        <form action="{{url('agence/'.$agence->id)}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <div class="champs-zk" >
                 <fieldset>
                         <legend>Modifier Agence</legend>
                         <div class="row">
                         <div class="col-md-6 ">
                                 <label>Nom d'agence :</label><br />
                                 <input type="text" name="nom" value="{{$agence->agence_name}}" class="has-error">
                                 @if ($errors->get('nom'))
                                     @foreach ($errors->get('nom') as $error)
                                     <div>
                                        <span style="color:red; font-size:13px">{{$error}}</span>
                                     </div>
                                     @endforeach
                                 @endif
                             <label>Ville d'agence :</label><br />
                             <input type="text" name="ville" value="{{$agence->ville}}" class="">
                             @if ($errors->get('ville'))
                                    @foreach ($errors->get('ville') as $error)
                                    <div>
                                        <span style="color:red; font-size:13px">{{$error}}</span>
                                    </div>
                                    @endforeach
                             @endif
                             <label>Adresse :</label><br />
                             <input type="text" name="adresse" value="{{$agence->addresse}}" class="">
                             @if ($errors->get('adresse'))
                                    @foreach ($errors->get('adresse') as $error)
                                    <div>
                                        <span style="color:red; font-size:13px">{{$error}}</span>
                                    </div>
                                    @endforeach
                             @endif

                             <label>Telephone</label><br />
                             <input type="text" name="telephone" value="{{$agence->agences_tel}}" class="">
                                 @if ($errors->get('telephone'))
                                    @foreach ($errors->get('telephone') as $error)
                                    <div>
                                        <span style="color:red; font-size:13px">{{$error}}</span>
                                    </div>
                                    @endforeach
                                @endif
                                 <label>Description :</label>
                             <textarea rows="6" name="description" class="">{{$agence->description}}</textarea>
                             @if ($errors->get('description'))
                                     @foreach ($errors->get('description') as $error)
                                     <div>
                                        <span style="color:red; font-size:13px">{{$error}}</span>
                                     </div>
                                     @endforeach
                              @endif
                         </div>
                             <div class="col-md-6 ">
                                 <label>image :</label><br />
                                 <input type="file" id="avatar" value="{{$agence->image}}" class="" name="image" >
                             </div>
                         </div>
                               <button class="btn btn-primary">Submit</button>
                               <a href="{{url('admin/agence/afficheagence')}}"class="btn btn-secondary" type="reset">Annuler</a>
                     </fieldset>
               
             </div>
             
           </form>
     
       </div>
     </div>
     <!-- /Fin content-wrapper -->
 
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if(Session::has('message'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('message') }}");
    @endif
  
    @if(Session::has('error'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ session('error') }}");
    @endif
  
    @if(Session::has('info'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.info("{{ session('info') }}");
    @endif
  
    @if(Session::has('warning'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.warning("{{ session('warning') }}");
    @endif
  </script>
@endsection