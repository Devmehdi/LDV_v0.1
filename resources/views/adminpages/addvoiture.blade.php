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

    <div class="container-fluid" id="app">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nouveau Voiture</h4>
                        <div class="basic-form">
                            <form action="{{url('/admin/voiture/ajoutervoiture')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label>Nom de voiture <span style="color:red">*</span></label>
                                      <input type="text" class="form-control" value="{{old('nom')}}" required name="nom" placeholder="Nom">
                                      @if ($errors->get('nom'))
                                            @foreach ($errors->get('nom') as $error)
                                                    <div>
                                                        <span style="color:red; font-size:13px">{{$error}}</span>
                                                    </div>
                                            @endforeach
                                      @endif
                                </div>
                                <div class="form-group col-md-6">
                                      <label>Marque <span style="color:red">*</span></label>
                                      <select id="inputState" name="selectmarque" value="{{old('selectmarque')}}" required class="form-control">
                                          <option selected="selected">Sélectionné la marque</option>
                                          @foreach ($marques as $marq)
                                             <option  value={{$marq->id}}>{{$marq->marque}}</option>
                                          @endforeach
                                      </select>
                                      @if ($errors->get('selectmarque'))
                                            @foreach ($errors->get('selectmarque') as $error)
                                                    <div>
                                                        <span style="color:red; font-size:13px">{{$error}}</span>
                                                    </div>
                                            @endforeach
                                      @endif
                              </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label>Agence <span style="color:red">*</span></label>
                                      <select id="inputState" name="selectagence" value="{{old('selectagence')}}" class="form-control">
                                          <option selected="selected">Sélectionné l'agence</option>
                                          @foreach ($agences as $agence)
                                            <option  value={{$agence->id}}>{{$agence->agence_name}}</option>
                                          @endforeach
                                      </select>
                                      @if ($errors->get('selectagence'))
                                      @foreach ($errors->get('selectagence') as $error)
                                      <div>
                                          <span style="color:red; font-size:13px">{{$error}}</span>
                                      </div>
                              @endforeach
                             @endif
                                  </div>
                                      <div class="form-group col-md-3">
                                      <label>Matricule</span></label>
                                      <input type="text" name="matricule" placeholder="12345-A-12" class="form-control">
                                  </div>
                                   <div class="form-group col-md-3">
                                      <label>Model</label>
                                      <input type="text" name="model" placeholder="Model" class="form-control">
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label>Type de voiture <span style="color:red">*</span></label>
                                      <select id="inputState" name="selecttype" value="{{old('selecttype')}}" class="form-control">
                                          <option selected="selected">Sélectionné Type</option>
                                          <option value="Manuelle">Manuelle</option>
                                          <option value="Automatique">Automatique</option>
                                      </select>
                                      @if ($errors->get('selecttype'))
                                      @foreach ($errors->get('selecttype') as $error)
                                      <div>
                                          <span style="color:red; font-size:13px">{{$error}}</span>
                                      </div>
                              @endforeach
                             @endif
                            </div>
                                                                
                              <div class="form-group col-md-6">
                                  <label>Coleur <span style="color:red">*</span></label>
                                  <select id="inputState" name="selectcolor" value="{{old('selectcolor')}}" class="form-control">
                                      <option selected="selected" value="-1">Sélectionné Coleur</option>
                                      @foreach ($coleurs as $color)
                                      <option  value={{$color->id}}>{{$color->coleur}}</option>
                                    @endforeach

                                  </select>
                                  @if ($errors->get('selectcolor'))
                                  @foreach ($errors->get('selectcolor') as $error)
                                  <div>
                                      <span style="color:red; font-size:13px">{{$error}}</span>
                                  </div>
                          @endforeach
                         @endif
                                 </div>
                               </div>
                               
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label>Type de carburant <span style="color:red">*</span></label>
                                      <select id="inputState" name="selectcarburant" value="{{old('selectcarburant')}}" class="form-control">
                                          <option selected="selected">Sélectionné carburant</option>
                                          @foreach ($carburants as $carb)
                                             <option  value={{$carb->id}}>{{$carb->type_carburant}}</option>
                                          @endforeach
                                     
                                       </select>
                                       @if ($errors->get('selectcarburant'))
                                       @foreach ($errors->get('selectcarburant') as $error)
                                       <div>
                                           <span style="color:red; font-size:13px">{{$error}}</span>
                                       </div>
                               @endforeach
                              @endif
                                  </div>
                                  <div class="form-group col-md-3">
                                  <label>Prix <span style="color:red">*</span></label>
                                  <input type="text" name="prix" value="{{old('prix')}}" placeholder="Prix" required class="form-control">
                                  @if ($errors->get('prix'))
                                  @foreach ($errors->get('prix') as $error)
                                  <div>
                                      <span style="color:red; font-size:13px">{{$error}}</span>
                                  </div>
                                    @endforeach
                                    @endif
                              </div>
                              <div class="form-group col-md-3">
                                <label>KM <span style="color:red">*</span></label>
                                <input type="text" name="KM" value="{{old('KM')}}" placeholder="Kilometrage" required class="form-control">
                                @if ($errors->get('KM'))
                                @foreach ($errors->get('KM') as $error)
                                <div>
                                    <span style="color:red; font-size:13px">{{$error}}</span>
                                </div>
                                  @endforeach
                                  @endif
                            </div>
                              </div>
                               <div class="form-row">
                             <div class="form-group col-md-6">
                              
                                  <label>Image <span style="color:red">*</span></label>
                                  <input type="file" name="image" class="form-control" value="{{old('image')}}" required placeholder="">
                                  @if ($errors->get('image'))
                                  @foreach ($errors->get('image') as $error)
                                  <div>
                                      <span style="color:red; font-size:13px">{{$error}}</span>
                                  </div>
                          @endforeach
                         @endif
                              </div>
                               </div>
                              <div class="form-group">
                                  <label>Description <span style="color:red">*</span></label>
                                  <textarea rows="10" class="form-control" name="description" value="{{old('description')}}" required placeholder="Enter description"></textarea>
                                  @if ($errors->get('description'))
                                  @foreach ($errors->get('description') as $error)
                                  <div>
                                      <span style="color:red; font-size:13px">{{$error}}</span>
                                  </div>
                            @endforeach
                            @endif
                                </div>
                             
                              <button type="submit" class="btn btn-dark">Submit</button>
                              <a href="/admin/voiture/affichevoiture" class="btn btn-secondary">Annuler</a>
                    
                        </form>
                      </div>
       
     </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- #/ container -->
</div>
<script src="{{ asset('js/app.js') }}"></script>
@endsection