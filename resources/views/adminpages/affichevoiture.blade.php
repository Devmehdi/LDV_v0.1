@extends('layouts.master.layout')


@section('content')
    

<section class="wrapper">
	<ul class="tabs">
		<li class="active">Voitures</li>
		<li>Coleurs</li>
        <li>Type de voiture</li>
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
                                    <a href="{{url('admin/voiture/'.$voiture->id.'/edit')}}"><i class="zmdi zmdi-edit"></i></a>&nbsp;
                                    <a href="{{url('admin/voiture/'.$voiture->id.'/details')}}" data-toggle="modal" data-target="#exampleModalCenter"><i class="zmdi zmdi-view-list-alt"></i></i></a>&nbsp;
                                    <a href="#" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="zmdi zmdi-delete"></i></a>
                                        <form action="{{url('voiture/'.$voiture->id.'/deleted')}}" method="POST">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <th>Voiture</th>
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
                                        <a href="{{url('admin/coleur/'.$coleur->id.'/edit')}}"><i style="margin-left:15px" class="zmdi zmdi-edit"></i></a>&nbsp;
                                        
                                        
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
                <h4 class="card-title">Liste des types</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                              <th>Type</th>
                              <th>Statut</th>
                              <th>Créé le</th>
                              <th>Modifier le</th>
                              <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($carburants as $carb)
                              <tr>
                                <td>{{$carb->type_carburant}}</td>
                                <td>{{$carb->statut}}</td>
                                <td>{{$carb->created_at}}</td>
                                <td>{{$carb->update_at}}</td>
                                <td>
                                    <a href="{{url('admin/voituretype/'.$carb->id.'/edit')}}"><i style="margin-left:15px" class="zmdi zmdi-edit"></i></a>&nbsp;
                            </td>
                            </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Type</th>
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
                                <a href="{{url('admin/voituremarque/'.$marque->id.'/edit')}}"><i style="margin-left:15px" class="zmdi zmdi-edit"></i></a>&nbsp;
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
</section>
              
@endsection
