@extends('layouts.master.layout')


@section('content')
<div class="content-body">

  
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
        </ol>
    </div>
</div>
<div class="container-fluid">
   
    <div class="row">
        <div class="col-12">
            
            <div class="card" >
                <div class="row">
                
                    <div class="col-4">
                        <a href="/admin/user/ajouteruser" style="margin: 20px" class="btn btn-primary">Ajouter nouveau</a>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Liste Utilisateur</h4>
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
                                    <td>{{$user->Nom}}</td>
                                    <td>{{$user->prenom}}</td>
                                    <td>{{$user->addresse}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>
                                        <a href="{{url('admin/user/'.$user->id.'/edit')}}"><i class="zmdi zmdi-edit"></i></a>&nbsp;
                                        <a href="{{url('admin/user/'.$user->id.'/details')}}" data-toggle="modal" data-target="#exampleModalCenter"><i class="zmdi zmdi-view-list-alt"></i></i></a>&nbsp;
                                        <a href="#" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="zmdi zmdi-delete"></i></a>
                                        <form action="{{url('user/'.$user->id.'/deleted')}}" method="POST">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Confirmer</h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">Vouller vous vraiment supprimer cet ligne ?</div>
                                                        <div class="modal-footer">
                                                            <a type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</a>
                                                            <button type="submit" class="btn btn-primary">Supprimer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                </td>
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
</div>
@endsection
