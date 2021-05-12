@extends('layouts.master.layout')


@section('content')
<div class="content-body">

  
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Modifier Voiture</h4>
                        <div class="basic-form">
                            <form action="{{url('voiture/'.$voiture->id)}}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                @csrf
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label>Nom de voiture</label>
                                      <input type="text" class="form-control" name="nom" value="{{$voiture->voiture_nom}}" placeholder="Nom">
                                  </div>
                                 
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label>Agence</label>
                                      <select id="inputState" name="selectagence" class="form-control">
                                          <option selected="selected">Choose...</option>
                                          <option value="1">Option 1</option>
                                          <option >Option 1</option>
                                          <option>Option 2</option>
                                          <option>Option 3</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label>Type de voiture</label>
                                      <select id="inputState" name="selecttype" class="form-control">
                                        <option selected="selected" value="-1">Selectionné type de voiture</option> 
                                         <option value="1">Manuelle</option>
                                          <option value="2">Automatique</option>
                                      </select>
                                      <div>
                                          <span style="color:red;font-size:13px"></span>
                                      </div>
                                  </div>
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label>Marque</label>
                                      <select id="inputState" name="selectmarque" class="form-control">
                                        <option selected="selected" value="-1">Selectionné la marque</option>
                                        @foreach ($marques as $marq)
                                              <option  value={{$marq->id}}>{{$marq->marque}}</option>
                                          @endforeach
                                      </select>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label>Type de carburant</label>
                                      <select id="inputState" name="selectcarburant" class="form-control">
                                        <option selected="selected" value="-1">Selectionné le type carburant</option>
                                          @foreach ($carburants as $carb)
                                                <option  value={{$carb->id}}>{{$carb->type_carburant}}</option>
                                            @endforeach
                                      </select>
                                  </div>
                                  <div class="form-group col-md-4">
                                      <label>Matricule</label>
                                      <input type="text" name="matricule" value="{{$voiture->matricule}}" class="form-control">
                                  </div>
                              </div>
                             <div class="form-group col-md-4">
                                      <label>Model</label>
                                      <input type="text" name="model" class="form-control" value="{{$voiture->model}}">
                                  </div>
                              <div class="form-group col-md-6">
                                  <label>Coleur</label>
                                  
                                  <select id="inputState" name="selectcolor" class="form-control">
                                      <option selected="selected" value="-1">Selectionné un coleur</option>
                                      @foreach ($coleurs as $color)
                                        <option  value={{$color->id}}>{{$color->coleur}}</option>
                                      @endforeach
                                  </select>
                              </div>
                              <div class="form-group col-md-4">
                                  <label>Prix</label>
                                  <input type="text" name="prix" class="form-control" value="{{$voiture->prix}}">
                              </div>
                              <div class="form-group">
                                  <label>Description</label>
                                  <textarea rows="10" class="form-control" name="description" placeholder="Enter description">{{$voiture->description}}</textarea>
                              </div>
                              <div class="form-group col-md-6">
                                  <label>Image</label>
                                  <input type="file" class="form-control" name="image" placeholder="">
                              </div>
                              <button type="submit" class="btn btn-dark">Submit</button>
                              <a href="{{url('admin/voiture/affichevoiture')}}" class="btn btn-secondary" >Annuler</a>
                    
                        </form>
                      </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- #/ container -->
</div>
@endsection
