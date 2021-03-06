@extends('layouts.master.layout')


@section('content')
<div class="content-body">

  
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Voiture</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Nouvelle marque</a></li>
        </ol>
    </div>
</div>

    <div class="container-fluid" id="app">
        <div class="row">
           
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nouveau Marque</h4>
                        <marque-component></marque-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
<script src="{{ asset('js/app.js') }}"></script>
@endsection
