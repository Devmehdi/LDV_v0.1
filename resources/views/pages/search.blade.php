@extends('layouts.layout')

@section('contenu')
<br><br><br><br>
<section class="">
    <div class="container">
   
        <div class="row">
          @foreach ($voiture as $voitur)
          <div class="col-md-3">
            <div class="car-wrap ftco-animate">
              <div class="img d-flex align-items-end" style="background-image: url({{url('images/voitures/'.$voitur->image)}});">
                <div class="price-wrap d-flex">
                  <span class="rate">{{$voitur->prix}}</span>
                  <p class="from-day">
                    <span style="margin-left: 14px;">par</span>
                    <span>MAD/Jour</span>
                  </p>
                </div>
              </div>
              <div class="text p-4 text-center">
                <h2 class="mb-0"><a href="#">{{$voitur->voiture_nom}}</a></h2>
                <span>{{$voitur->model}}</span>
                <p class="d-flex mb-0 d-block"><a href="{{url('/Reserver/Voiture/'.$voitur->id)}}" class="btn btn-black btn-outline-black mr-1">Réserver</a> <a href="{{url('details/'.$voitur->id)}}" class="btn btn-black btn-outline-black ml-1">Details</a></p>
              </div>
            </div>
          </div>

          @endforeach
        </div>
 
    </div>
</section>

@endsection