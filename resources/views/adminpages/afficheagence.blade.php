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
                                    <th>Agence</th>
                                    <th>Ville</th>
                                    <th>Adresse</th>
                                    <th>Telephone</th>
                                    <th>Crée le</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($agences as $agence)
                                  <tr>
                                    <td>{{$agence->agence_name}}</td>
                                    <td>{{$agence->ville}}</td>
                                    <td>{{$agence->addresse}}</td>
                                    <td>{{$agence->agences_tel}}</td>
                                    <td>{{$agence->created_at}}</td>
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

