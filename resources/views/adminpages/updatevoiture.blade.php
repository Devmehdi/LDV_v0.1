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
                                      <label>Nom de voiture   <span style="color:red">*</span></label>
                                      <input type="text" class="form-control" name="nom" value="{{$voiture->voiture_nom}}" placeholder="Nom">
                                      @if ($errors->get('nom'))
                                      @foreach ($errors->get('nom') as $error)
                                      <div>
                                          <span style="color:red; font-size:13px">{{$error}}</span>
                                      </div>
                              @endforeach
                             @endif
                                    </div>
                                 
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label>Agence  <span style="color:red">*</span></label>
                                      <select id="inputState" name="selectagence" class="form-control">
                                          <option selected="selected">Sélectionné l'agence</option>
                                          @foreach ($agences as $agence)
                                          <option  value={{$agence->id}}>{{$agence->agence_name}}</option>
                                        @endforeach
                                      </select>
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label>Type de voiture   <span style="color:red">*</span></label>
                                      <select id="inputState" name="selecttype" class="form-control">
                                          <option selected="selected" value="-1">Selectionné Type </option> 
                                          <option value="1">Manuelle</option>
                                          <option value="2">Automatique</option>
                                      </select>
                                  </div>
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label>Marque   <span style="color:red">*</span></label>
                                      <select id="inputState" name="selectmarque" class="form-control">
                                        <option selected="selected" value="-1">Selectionné la marque</option>
                                            @foreach ($marques as $marq)
                                                <option  value={{$marq->id}}>{{$marq->marque}}</option>
                                            @endforeach
                                      </select>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label>Type de carburant <span style="color:red">*</span></label>
                                      <select id="inputState" name="selectcarburant" class="form-control">
                                        <option selected="selected" value="-1">Selectionné carburant</option>
                                          @foreach ($carburants as $carb)
                                                <option  value={{$carb->id}}>{{$carb->type_carburant}}</option>
                                            @endforeach
                                      </select>
                                  </div>
                                  <div class="form-group col-md-4">
                                      <label>Matricule</span></label>
                                      <input type="text" name="matricule" value="{{$voiture->matricule}}" class="form-control">
                                  </div>
                              </div>
                             <div class="form-group col-md-4">
                                      <label>Model </label>
                                      <input type="text" name="model" class="form-control" value="{{$voiture->model}}">
                                  </div>
                              <div class="form-group col-md-6">
                                  <label>Coleur  <span style="color:red">*</span></label>
                                  
                                  <select id="inputState" name="selectcolor" class="form-control">
                                      <option selected="selected" value="-1">Selectionné un coleur</option>
                                      @foreach ($coleurs as $color)
                                        <option  value={{$color->id}}>{{$color->coleur}}</option>
                                      @endforeach
                                  </select>
                              </div>
                              <div class="form-group col-md-4">
                                  <label>Prix   <span style="color:red">*</span></label>
                                  <input type="text" name="prix" class="form-control" required value="{{$voiture->prix}}">
                                    @if ($errors->get('prix'))
                                        @foreach ($errors->get('prix') as $error)
                                            <div>
                                                <span style="color:red; font-size:13px">{{$error}}</span>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Image   <span style="color:red">*</span></label>
                                    <input type="file" class="form-control" name="image" required placeholder="">
                                      @if ($errors->get('image'))
                                          @foreach ($errors->get('image') as $error)
                                              <div>
                                                  <span style="color:red; font-size:13px">{{$error}}</span>
                                              </div>
                                          @endforeach
                                      @endif
                                </div>
                              <div class="form-group">
                                  <label>Description   <span style="color:red">*</span></label>
                                  <textarea rows="10" class="form-control" name="description" placeholder="Enter description">{{$voiture->description}}</textarea>
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
