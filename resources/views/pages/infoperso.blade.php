@extends('layouts.layout')

@section('contenu')
<section class="ftco-section contact-section">
    <div class="container">
        <div class="">
            <div class="col-lg-12">
                <h1 class="text-center">Mes informations</h1>
                <div class="media align-items-center mb-4">
                <img src="{{url('images/users/'.$user->image)}}" height="80" width="80" alt="">&nbsp;&nbsp;&nbsp;
                    <div class="media-body">
                        <h3 class="mb-0">{{$fullname}}</h3>
                    </div>
                </div>
                <div class="">
                    <div class="col-xs-12">
                        <p>Username  : <span>{{$user->username}}</span></p>
                        <p>Email     : <span>{{$user->email}}</span></p>
                        <p>Telephone : <span>{{$user->telephone}}</span></p>
                        <p>Adresse   : <span>{{$user->addresse}}</span></p>
                    </div>
                    
                </div>
            </div>
           
        </div>
    </div>
  </section>
@endsection