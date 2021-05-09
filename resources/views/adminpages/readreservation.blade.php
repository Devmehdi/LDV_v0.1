@extends('layouts.master.layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card" style=" margin-left: 100px;">
                <div class="card-body">
                    <div class="email-left-box"><a href="email-compose.html" class="btn btn-primary btn-block">Back</a>
                        
                    </div>
                    <div class="email-right-box">
                        <div class="read-content">
                            <div class="media pt-5">
                                <img class="mr-3 rounded-circle" src="images/avatar/1.jpg">
                                <div class="media-body">
                                    <h5 class="m-b-3">Ingredia Nutrisha</h5>
                                    <p class="m-b-2">20 May 2018</p>
                                </div>
                                
                            </div>
                            <hr>
                            <div class="media mb-4 mt-1">
                                <div class="media-body"><span class="float-right">07:23 AM</span>
                                    <h4 class="m-0 text-primary">Nouvelle demande du {date}</h4>
                                </div>
                            </div>
                            <p><strong>Ingredia Nutrisha,</strong> A collection of {{$reservation->id}} {{$voiture->voiture_nom}} textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</p>

                            <hr>

                            <div class="form-group p-t-15">
                                <textarea class="w-100 p-20 l-border-1" name="" id="" cols="30" rows="5" placeholder="It's really an amazing.I want to know more about it..!"></textarea>
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-primaryw-md m-b-30" type="button">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
@endSection