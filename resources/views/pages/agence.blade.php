@extends('layouts.layout')


@section('contenu')
    
<section class="ftco-section">
    <div class="container">
       <div id="app">
        <br><br><br>
       
        <div class="row d-flex">
          @foreach ($agences as $agence)
          <div class="col-md-4 d-flex ftco-animate" >
              <div>
                
                <div class="blog-entry justify-content-end" style="width:300px">
                  <a href="agence-single.html" class="block-20" style="">
                    <img src="{{asset('storage/'.$agence->image)}}" alt="#" style="width:270px;height:300px;">
                  </a>
                  <div class="text pt-4">
                    <h3 class="heading mt-2"><a href="agence-single.html">{{$agence->nom}}</a></h3>
                    <p>{{$agence->description}}</p>
                  </div>
                </div>
               
           
          </div>
        </div>  
        @endforeach
      </div>
     
       </div>
      <script src="{{ asset('js/app.js') }}"></script>
    </div>
  </section>

@endsection