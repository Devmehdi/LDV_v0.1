@extends('layouts.master.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card" style="margin-left: 300px;">
                <div class="card-body">
                    <div class="email-left-box">
                        <h3>Boite de résevation</h3>
                        <br>
                        <br>
                        <div class="mail-list mt-4"><a href="email-inbox.html" class="list-group-item border-0 text-primary p-r-0"><i class="fa fa-inbox font-18 align-middle mr-2"></i> <b>Aujourd'hui</b> @if ($count!=0) <span class="badge badge-primary badge-sm float-right m-t-5">{{$count}}</span> </a>@endif
                        <i>Dérnier Mois </i>
                           
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    
                    <div class="email-right-box" >
                        @foreach ($reservations as $reservation)
                        @if($reservation->confirmation==0)
                            <div class="email-list m-t-15">
                              
                                <div class="message"  style="border-top: 1px solid darkgray;border-bottom: 1px solid darkgray;">
                                        <a href="{{url('/admin/Reserv/reservation/'.$reservation->id)}}">
                                            <div class="col-mail col-mail-2" style="font-size:18px;">
                                               
                                                <div class="subject" style="color:black">Nouvelle Demande du {{$reservation->created_at->format('m-d-y')}}  cliquer ici pour voir plus de details ...</div>
                                                <div class="date">{{$reservation->created_at->format('h:m')}}</div>
                                            </div>
                                        </a>
                                </div>
                            </div>
                            @endif
                            
                            @if($reservation->confirmation==1)
                            <div class="email-list m-t-15" style="background: rgba(242,245,245,0.8); border-bottom: 1px solid darkgray;">
                                <div class="message">
                                        <a href="{{url('/admin/Reserv/reservation/'.$reservation->id)}}">
                                            <div class="col-mail col-mail-2" style="font-size:18px">
                                                <div class="subject" >Nouvelle Demande de Voiture cliquer ici pour voir plus de details...</div>
                                                <div class="date">{{$reservation->created_at->format('h:m')}}</div>
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