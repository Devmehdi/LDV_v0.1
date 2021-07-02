@extends('layouts.layout')

@section('contenu')
<section class="ftco-section contact-section">
    <div class="container">
      <h1 class="text-center">Mon profile</h1>
      <div class="d-flex justify-content-around">
         
            <a class="bloc" href="{{ route('mes-infos') }}">Mes infomation personel</a>
        
            <a  class="bloc" href="{{ route('mes-reservations') }}">Mes reservasion</a>
        
      </div>
    </div>
  </section>
@endsection