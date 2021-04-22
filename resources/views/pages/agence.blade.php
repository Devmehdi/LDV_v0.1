@extends('layouts.layout')


@section('contenu')
    
<section class="ftco-section">
    <div class="container">
       <div id="app">
          <agences-component></agences-component>
       </div>
      <script src="{{ asset('js/app.js') }}"></script>
    </div>
  </section>

@endsection