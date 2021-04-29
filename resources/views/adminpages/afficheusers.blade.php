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
                                    <th>Nom Utilisateur</th>
                                    <th>Prenom Utilisateur</th>
                                    <th>addresse</th>
                                    <th>email</th>
                                    <th>créé le</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                  <tr>
                                    <td>{{$user->nom}}</td>
                                    <td>{{$user->prenom}}</td>
                                    <td>{{$user->addresse}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at}}</td>
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
