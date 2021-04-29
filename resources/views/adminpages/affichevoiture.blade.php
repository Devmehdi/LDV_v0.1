@extends('layouts.master.layout')


@section('content')
    
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card" style="margin:130px">
                <div class="card-body">
                    <h4 class="card-title">Data Table</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                  <th>Voitures</th>
                                  <th>Matricule</th>
                                  <th>Prix</th>
                                  <th>Model</th>
                                  <th>Créé le</th>
                                  <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($voitures as $voiture)
                                  <tr>
                                    <td>{{$voiture->voiture_nom}}</td>
                                    <td>{{$voiture->matricule}}</td>
                                    <td>{{$voiture->prix}}</td>
                                    <td>{{$voiture->model}}</td>
                                    <td>{{$voiture->created_at}}</td>
                                    <td>$320,800</td>
                                </tr>
                              @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
