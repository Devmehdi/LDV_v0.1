@extends('layouts.master.layout')


@section('content')
<div class="content-body">

  
    <!-- row -->

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
