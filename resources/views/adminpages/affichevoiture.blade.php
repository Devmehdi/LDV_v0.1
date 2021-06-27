@extends('layouts.master.layout')


@section('content')
    


<div class="content-body">

  
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Voiture</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Liste des voitures</a></li>
        </ol>
    </div>
</div>

    <div class="container-fluid" id="app">
    
	<ul class="tabs">
		<li class="active">Voitures</li>
		<li>Coleurs</li>
        <li>Villes</li>
		<li>Marque</li>
	</ul>

	<ul class="tab__content">
		<li class="active">
            <div class="row">
                
                <div class="col-4">
                    <a href="/admin/voiture/ajoutervoiture" style="margin: 20px" class="btn btn-primary">Ajouter nouveau</a>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Liste Voitures</h4>
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
                                <td>
                                    <a href="{{url('admin/voiture/'.$voiture->id.'/edit')}}"><i class="zmdi zmdi-edit" title="Modifié" style="color:orange"></i></a>&nbsp;
                                    <a href="{{url('admin/voiture/'.$voiture->id.'/details')}}" data-toggle="modal" data-target="#detailsModal{{$voiture->id}}"><i class="zmdi zmdi-view-list-alt" title="Détails" style="color:orange"></i></i></a>&nbsp;
                                    <div class="modal fade" id="detailsModal{{ $voiture->id }}" data-item-id="{{ $voiture->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Détails</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                            </div>
                                            <div class="modal-body">
                                                Voiture : {{$voiture->voiture_nom}}
                                                <br>
                                                <br>
                                                Matricule        : {{$voiture->matricule}}
                                                <br>
                                                <br>
                                                Prix      : {{$voiture->prix}}
                                                <br>
                                                <br>
                                                Model    : {{$voiture->model}}
                                                <br>
                                                <br>
                                                Crée le      : {{$voiture->created_at}}
                                                <br>
                                                <br>
                                                Dérnier modification  : {{$voiture->updated_at}}
                                            </div>
                                            
                                        </div>
                                        </div>
                                    </div>
                                    <a href="#" data-toggle="modal" data-target="#deleteModal{{$voiture->id}}"><i class="zmdi zmdi-delete" title="Supprimé" style="color:orange"></i></a>
                                        <form action="{{url('voiture/'.$voiture->id.'/deleted')}}" method="POST">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                            <div class="modal fade bd-example-modal-sm" id="deleteModal{{$voiture->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Confirmer</h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
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
                                <th>Voitures</th>
                                <th>Matricule</th>
                                <th>Prix</th>
                                <th>Model</th>
                                <th>Créé le</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

		</li>
		<li>
			<div class="row">
                
                <div class="col-4">
                    <a href="/admin/coleur/ajoutercoleur" style="margin: 20px" class="btn btn-primary">Ajouter nouveau</a>
                </div>
            </div>
                <div class="card-body">
                    <h4 class="card-title">Liste des coleurs</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                  <th>Coleur</th>
                                  <th>Statut</th>
                                  <th>Créé le</th>
                                  <th>Modifier le</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($coleurs as $coleur)
                                  <tr>
                                    <td>{{$coleur->coleur}}</td>
                                    <td>{{$coleur->statut}}</td>
                                    <td>{{$coleur->created_at}}</td>
                                    <td>{{$coleur->update_at}}</td>
                                    <td>
                                        <a href="{{url('admin/coleur/'.$coleur->id.'/edit')}}"><i style="margin-left:15px ;color:orange" class="zmdi zmdi-edit" title="Modifié" ></i></a>&nbsp;
                                        
                                        
                                </td>
                                </tr>
                              @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Coleur</th>
                                    <th>Statut</th>
                                    <th>Créé le</th>
                                    <th>Modifier le</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                
			</div>
		</li>
        <li>
			<div class="row">
                
                <div class="col-4">
                    <a href="/admin/voiture/ajoutertype" style="margin: 20px" class="btn btn-primary">Ajouter nouveau</a>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Liste des villes</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                              <th>Designation</th>
                              <th>Statut</th>
                              <th>Créé le</th>
                              <th>Modifier le</th>
                              <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($villes as $ville)
                              <tr>
                                <td>{{$ville->designation}}</td>
                                <td>{{$ville->statut}}</td>
                                <td>{{$ville->created_at}}</td>
                                <td>{{$ville->update_at}}</td>
                                <td>
                                    <a href="{{url('admin/voituretype/'.$ville->id.'/edit')}}"><i style="margin-left:15px ;color:orange" class="zmdi zmdi-edit" title="Modifié"></i></a>&nbsp;
                            </td>
                            </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Designation</th>
                                <th>Statut</th>
                                <th>Créé le</th>
                                <th>Modifier le</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            
            
            
        </div>
    </li>
    <li>
        <div class="row">
                
            <div class="col-4">
                <a href="/admin/voiture/ajoutermarque" style="margin: 20px" class="btn btn-primary">Ajouter nouveau</a>
            </div>
        </div>
        <div class="card-body">
            <h4 class="card-title">Liste des marques</h4>
            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr>
                          <th>Marque</th>
                          <th>Statut</th>
                          <th>Créé le</th>
                          <th>Modifier le</th>
                          <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($marques as $marque)
                          <tr>
                            <td>{{$marque->marque}}</td>
                            <td>{{$marque->statut}}</td>
                            <td>{{$marque->created_at}}</td>
                            <td>{{$marque->update_at}}</td>
                            <td>
                                <a href="{{url('admin/voituremarque/'.$marque->id.'/edit')}}"><i style="margin-left:15px ;color:orange" class="zmdi zmdi-edit" title="Modifié"></i></a>&nbsp;
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                          <th>Marque</th>
                          <th>Statut</th>
                          <th>Créé le</th>
                          <th>Modifier le</th>
                          <th>Actions</th>
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
