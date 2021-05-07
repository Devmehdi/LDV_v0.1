@extends('layouts.master.layout')


@section('content')
<div class="content-body">

  
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
           
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Modifier Coleur</h4>
                        <div class="basic-form">
                            <form action="{{url('coleur/'.$coleur->id)}}" method="POST">
                                <input type="hidden" name="_method" value="PUT">
                                @csrf
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label>Coleur</label>
                                      <input type="text" class="form-control" value="{{$coleur->coleur}}" name="nom" placeholder="Nom">
                                   <div>
                                      <span style="color:red;font-size:13px"></span>
                                    </div>
                                  </div>
                              </div>
                               <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label>Statut</label>
                                      <select name="selected" class="form-control">
                                        <option selected value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                      </select>
                                      <div>
                                      <span style="color:red;font-size:13px"></span>
                                    </div>
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-dark">Submit</button>
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
