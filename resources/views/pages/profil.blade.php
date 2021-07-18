@extends('layouts.layout')

@section('contenu')
<section class="ftco-section contact-section">
    <div class="container">
      <h1 class="text-center">Mon profile</h1>
      <!-- <div class="d-flex justify-content-around"> -->
        <div class="row" style="margin-top: 50px;">
          
          <div class="col-xs-12 col-lg-4 offset-lg-2" style="margin-bottom: 100px;" >
          <a class="bloc" href="{{ route('mes-infos') }}">Mes infomation personel</a>
          </div>

          <div class="col-xs-12 col-lg-4" style="margin-bottom: 50px;">
          <a  class="bloc" href="{{ route('mes-reservations') }}">Mes reservasion</a>
            </div>

        </div>
         
            
        
        
      <!-- </div> -->
    </div>
  </section>
@endsection