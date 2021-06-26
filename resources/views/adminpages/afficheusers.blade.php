@extends('layouts.master.layout')


@section('content')
<div class="content-body">

  
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Utilisateur</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Liste des utilisateurs</a></li>
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
                                    <th>Prénom Utilisateur</th>
                                    <th>Addresse</th>
                                    <th>E-mail</th>
                                    <th>Créé le</th>
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
                                        <a href="{{url('admin/user/'.$user->id.'/edit')}}"><i class="zmdi zmdi-edit" title="Modifié" style="color:orange"></i></a>&nbsp;
                                        <a href="{{url('admin/user/'.$user->id.'/details')}}" data-toggle="modal" data-target="#ModalDetails{{ $user->id }}"><i title="Détails" class="zmdi zmdi-view-list-alt" style="color:orange"></i></i></a>&nbsp;
                                        <div class="modal fade" id="ModalDetails{{ $user->id }}" data-item-id="{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Détails</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                </div>
                                                <div class="modal-body">
                                                    Nom : {{$user->Nom}}
                                                    <br>
                                                    <br>
                                                    Prénom        : {{$user->prenom}}
                                                    <br>
                                                    <br>
                                                    Adresse      : {{$user->addresse}}
                                                    <br>
                                                    <br>
                                                    E-mail    : {{$user->email}}
                                                    <br>
                                                    <br>
                                                    Crée le      : {{$user->created_at}}
                                                    <br>
                                                    <br>
                                                    Dérnier modification  :{{$user->updated_at}}
                                                </div>
                                                
                                            </div>
                                            </div>
                                        </div>
                                        <a href="#" data-toggle="modal" data-target="#modalDelete{{$user->id}}"><i class="zmdi zmdi-delete" title="Supprimé" style="color:orange"></i></a>
                                        <form action="{{url('user/'.$user->id.'/deleted')}}" method="POST">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                            <div class="modal fade bd-example-modal-sm" id="modalDelete{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <th>Nom Utilisateur</th>
                                <th>Prénom Utilisateur</th>
                                <th>Addresse</th>
                                <th>E-mail</th>
                                <th>Créé le</th>
                                <th>Action</th>
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
