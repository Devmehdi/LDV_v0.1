@extends('layouts.master.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card" style="margin-left: 300px;">
                <div class="card-body">
                    <div class="email-left-box">
                        <div class="mail-list mt-4"><a href="email-inbox.html" class="list-group-item border-0 text-primary p-r-0"><i class="fa fa-inbox font-18 align-middle mr-2"></i> <b>Aujourd'hui</b> @if ($count!=0) <span class="badge badge-primary badge-sm float-right m-t-5">{{$count}}</span> </a>@endif
                            <a href="#" class="list-group-item border-0 p-r-0"><i class="fa fa-paper-plane font-18 align-middle mr-2"></i>Dérnier Mois</a>  <a href="#" class="list-group-item border-0 p-r-0"><i class="fa fa-star-o font-18 align-middle mr-2"> </a>
                            <a href="#" class="list-group-item border-0 p-r-0"><i class="mdi mdi-file-document-box font-18 align-middle mr-2"></i>Dérnier Année</a><a href="#" class="list-group-item border-0 p-r-0">
                        </div>
                    </div>
                  
                    <div class="email-right-box">
                        @foreach ($reservations as $reservation)
                        @if($reservation->confirmation==0)
                            <div class="email-list m-t-15">
                                <div class="message">
                                        <a href="{{url('/admin/Reserv/reservation/'.$reservation->id)}}">
                                            <div class="col-mail col-mail-2">
                                                <div class="subject" style="color: red">Nouvelle Demande de Voiture Voir le detail ...</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                
                                </div>
                            </div>
                            @endif
                            @if($reservation->confirmation==1)
                            <div class="email-list m-t-15">
                                <div class="message">
                                        <a href="{{url('/admin/Reserv/reservation/'.$reservation->id)}}">
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Nouvelle Demande de Voiture Voir le detail ...</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                
                                </div>
                            </div>
                            @endif
                         
                        @endforeach
                        <!-- panel -->
                        <div class="row">
                            <div class="col-7">
                                
                            </div>
                         <!--   <div class="col-5">
                                <div class="btn-group float-right">
                                    <button class="btn btn-gradient" type="button"><i class="fa fa-angle-left"></i>
                                    </button>
                                    <button class="btn btn-dark" type="button"><i class="fa fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection