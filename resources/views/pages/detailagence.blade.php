@extends('layouts.layout')

@section('contenu')
    
<section class="ftco-section">
    <div class="container">
      
      <div class="row d-flex">
        
          <div class="col-md-8 offset-md-2 d-flex ftco-animate">
          <div class="blog-entry">
            <div href="blog-single.html" class="block-20" style="background-image: url('{{asset('images/agences/'.$agence->image)}}');">
            </div>

            <div class="text pt-4">
            
              <h3 class="heading mt-2">{{$agence->ville}} {{$agence->agence_name}}</h3>
              <p>{{$agence->description}}</p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>
@endsection