@extends('layouts.master.layout')


@section('content')
    


<div class="content-body">

  
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Boite de réservation</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Demande confirmé </a></li>
        </ol>
    </div>
</div>

    <div class="container-fluid" id="app">
    
	<ul class="tabs">
		<li class="active">Demande confirmé</li>
		<li>Les demandes archivé</li>
	</ul>

	<ul class="tab__content">
		<li class="active">
            <div class="card-body">
                <h4 class="card-title">Liste des demandes confirmé</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                              <th>Nom & Prénom</th>
                              <th>Télephone</th>
                              <th>Date réservation</th>
                              <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($reservations as $reser)
                        <tr>
                            <td>{{$reser->fullname}}</td>
                            <td>{{$reser->telephone}}</td>
                            <td>{{$reser->date_reservation}}</td>
                            <td>
                                <a href="/admin/generer/{{$reser->id}}/Facturetion"><i class="zmdi zmdi-file-text" title="Générer la Facture" style="color:orange"></i></a>&nbsp;
                                <a href="#" data-toggle="modal" data-target="#ModalDelete{{$reser->id}}"><i class="zmdi zmdi-archive" title="Archivé" style="color:orange"></i></a>
                                    <form action="{{url('reservation/'.$reser->id.'/archive')}}" method="POST">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}
                                        <div class="modal fade bd-example-modal-sm" id="ModalDelete{{$reser->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Confirmer</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">Vouller vous vraiment archivé cet ligne ?</div>
                                                    <div class="modal-footer">
                                                        <a type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</a>
                                                        <button type="submit" class="btn btn-primary">Archivé</button>
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
                                <th>Nom & prénom</th>
                                <th>Télephone</th>
                                <th>Date réservation</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

		</li>
		<li>
                <div class="card-body">
                    <h4 class="card-title">Demande archivé</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                  <th>Nom & Prénom</th>
                                  <th>Télephone</th>
                                  <th>Archivé le</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($demandearchive as $demande)
                                <tr>
                                    <td>{{$demande->fullname}}</td>
                                    <td>{{$demande->telephone}}</td>
                                    <td>{{$demande->deleted_at}}</td>
                                    <td>
                                        <a href='demande/{{$demande->id}}/restaurer'><i class="zmdi zmdi-time-restore" title="Réstaurer" style="color:orange"></i></a>&nbsp;
                                    </td>
                                </tr>
                                @endforeach
                            
                          
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nom & Prénom</th>
                                    <th>Télephone</th>
                                    <th>Archivé le</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                
			</div>
		</li>
    
	</ul>

    </div>
    <!-- #/ container -->
</div>
              
@endsection
