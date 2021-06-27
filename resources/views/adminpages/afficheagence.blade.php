@extends('layouts.master.layout')


@section('content')


<div class="content-body">

  
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Agence</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Liste des agences</a></li>
        </ol>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card" >
                <div class="row">
                
                    <div class="col-4">
                        <a href="ajouteragence" style="margin: 20px" class="btn btn-primary">Ajouter nouveau</a>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Liste d'agences</h4>
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
                                    <td>
                                            <a href="{{url('admin/agence/'.$agence->id.'/edit')}}"><i class="zmdi zmdi-edit" title="Modifié" style="color:orange"></i></a>&nbsp;
                                            <a href='#' data-item-id="{{ $agence->id }}" data-toggle="modal" data-target="#DetailsModal{{ $agence->id }}"><i class="zmdi zmdi-view-list-alt" title="Détails" style="color:orange"></i></i></a>&nbsp;
                                           <!-- Button trigger modal -->
                                            <!-- Modal -->
                                            <div class="modal fade" id="DetailsModal{{ $agence->id }}" data-item-id="{{ $agence->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Détails</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </div>
                                                    <div class="modal-body">
                                                        Nom d'agence : {{$agence->agence_name}}
                                                        <br>
                                                        <br>
                                                        Ville        : {{$agence->ville}}
                                                        <br>
                                                        <br>
                                                        Adresse      : {{$agence->addresse}}
                                                        <br>
                                                        <br>
                                                        Telephone    : {{$agence->agences_tel}}
                                                        <br>
                                                        <br>
                                                        Crée le      : {{$agence->created_at}}
                                                        <br>
                                                        <br>
                                                        Dérnier modification  :{{$agence->updated_at}}
                                                    </div>
                                                    
                                                </div>
                                                </div>
                                            </div>
                                            <a href="#" data-toggle="modal" data-target="#modaldelete{{$agence->id}}"><i class="zmdi zmdi-delete" title="Supprimé" style="color:orange"></i></a>
                                            <form id="myForm" action="{{url('agence/'.$agence->id.'/deleted')}}" method="POST">
                                                {{ csrf_field() }}
                                                {{method_field('DELETE')}}
                                                <div class="modal fade bd-example-modal-sm"  id="modaldelete{{$agence->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                    <th>Agence</th>
                                    <th>Ville</th>
                                    <th>Adresse</th>
                                    <th>Telephone</th>
                                    <th>Crée le</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
       
     
    </div>
</div>
    <!-- #/ container -->
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>

$("#myForm").on("submit", function(e) {
    e.preventDefault();
    return false;
});

</script>
@endsection

