@extends('layouts.master.layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card" style="margin-left: 300px;">
                <div class="card-body">
                    <div class="email-left-box"><a href="email-compose.html" class="btn btn-primary btn-block">Back</a>
                        
                    </div>
                    <div class="email-right-box" style="font-size:18px">
                        <div class="read-content">
                            <div class="media pt-5">
                                <div class="media-body">
                                    <h5 class="m-b-3">De : {{$reservation->fullname}}</h5>
                                    <p class="m-b-2">Du : {{$reservation->created_at->format('d-m-y')}}</p>
                                </div>
                                
                            </div>
                            <hr>
                            <div class="media mb-4 mt-1">
                                <div class="media-body">
                                    <h4 class="m-0 text-primary">Nouvelle demande du {{$reservation->date_debut}} au {{$reservation->date_fin}}</h4>
                                </div>
                            </div>
                            <p><strong>{{$reservation->fullname}}</strong> a demander la voiture {{$voiture->voiture_nom}} le {{$reservation->created_at->format('d-m-y')}} pour une durée de {{$reservation->duree}} jour(s).<br> merci de confirmer la demande </p>
                            <br/>

                            Telephone: {{$reservation->telephone}}
                            <hr>

                            <form action="{{url('confirmation/'.$reservation->id)}}" method="post">
                                <input type="hidden" name="_method" value="PUT">
                                @csrf
                                    <div class="form-group p-t-15">
                                        <textarea class="w-100 p-20 l-border-1" name="" id="" cols="20" rows="3" placeholder="Commentaire"></textarea>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primaryw-md m-b-30" type="submit">Send</button>
                                 </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
@endSection