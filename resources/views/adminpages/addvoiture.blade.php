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
                            <form action="{{url('/admin/voiture/ajoutervoiture')}}" method="POST">
                                @csrf
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label>Nom de voiture</label>
                                      <input type="text" class="form-control" required name="nom" placeholder="Nom">
                                      <div>
                                          <span style="color:red;font-size:13px"></span>
                                      </div>
                                  </div>
                                    <div class="form-group col-md-6">
                                      <label>Marque</label>
                                      <select id="inputState" name="selectmarque" class="form-control">
                                          <option selected="selected">Choose...</option>
                                          <option value="1">Option 1</option>
                                          <option>Option 2</option>
                                          <option>Option 3</option>
                                      </select>
                                       <div>
                                          <span style="color:red;font-size:13px"></span>
                                      </div>
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
                                      <div class="form-group col-md-3">
                                      <label>Matricule</label>
                                      <input type="text" name="matricule" class="form-control">
                                  </div>
                                   <div class="form-group col-md-3">
                                      <label>Model</label>
                                      <input type="text" name="model" class="form-control">
                                     <div v-for="error in modelerror" :key="error.index">
                                          <span style="color:red;font-size:13px"></span>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label>Type de voiture</label>
                                      <select id="inputState" name="selecttype" class="form-control">
                                          <option selected="selected">Choose...</option>
                                          <option value="1">Option 1</option>
                                          <option>Option 2</option>
                                          <option>Option 3</option>
                                      </select>
                                      <div>
                                          <span style="color:red;font-size:13px"></span>
                                      </div>
                                  </div>
                                                                
                              <div class="form-group col-md-6">
                                  <label>Coleur</label>
                                  <select id="inputState" name="selectcolor" class="form-control">
                                      <option selected="selected" value="-1">Sélectionné</option>
                                      <option value="1">Option 1</option>

                                  </select>
                                   <div>
                                          <span style="color:red;font-size:13px"></span>
                                      </div>
                                 </div>
                               </div>
                               
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label>Type de carburant</label>
                                      <select id="inputState" name="selectcarburant" class="form-control">
                                          <option selected="selected">Choose...</option>
                                          <option value="1">Option 1</option>
                                          <option>Option 2</option>
                                          <option>Option 3</option>
                                     
                                      <div>
                                          <span style="color:red;font-size:13px">*</span>
                                      </div> </select>
                                  </div>
                                  <div class="form-group col-md-4">
                                  <label>Prix</label>
                                  <input type="text" name="prix" class="form-control">
                                     <div >
                                          <span style="color:red;font-size:13px"> *</span>
                                      </div> 
                              </div>
                              </div>
                               <div class="form-row">
                             <div class="form-group col-md-6">
                                  <label>Image</label>
                                  <input type="file" name="image" class="form-control" placeholder="">
                              </div>
                               </div>
                              <div class="form-group">
                                  <label>Description</label>
                                  <textarea rows="10" class="form-control" name="description" placeholder="Enter description"></textarea>
                              </div>
                             
                              <button type="submit" class="btn btn-dark">Submit</button>
                        
                    
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