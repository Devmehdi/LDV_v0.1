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
    
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ajouter Agence</h4>
                        <div id="app">
                            <div class="basic-form">
                                <form action="{{url('/admin/agence/ajouteragence')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Nom d'agence</label>
                                            <input type="text" class="form-control" name="nom" value="{{old('nom')}}" required placeholder="Nom d'agence">
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
                                            <label>Ville</label>
                                            <select id="inputState" name="ville" value="{{old('ville')}}" class="form-control">
                                                <option selected="selected" value="Casablanaca">Casablanca</option>
                                                <option value="casablanca">Option 1</option>
                                                <option value="Rabat">Option 2</option>
                                                <option value="Tanger">Option 3</option>
                                            </select>
                                            @if ($errors->get('ville'))
                                                @foreach ($errors->get('ville') as $error)
                                                <div>
                                                    <span style="color:red; font-size:13px">{{$error}}</span>
                                                </div>
                                                @endforeach
                                           @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Telephone</label>
                                            <input type="text" class="form-control" value="{{old('telephone')}}" name="telephone">
                                                @if ($errors->get('telephone'))
                                                    @foreach ($errors->get('telephone') as $error)
                                                    <div>
                                                        <span style="color:red; font-size:13px">{{$error}}</span>
                                                    </div>
                                            @endforeach
                                           @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="adresse" value="{{old('adresse')}}" placeholder="Addresse">
                                        @if ($errors->get('adresse'))
                                                @foreach ($errors->get('adresse') as $error)
                                                <div>
                                                    <span style="color:red; font-size:13px">{{$error}}</span>
                                                </div>
                                              @endforeach
                                       @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="10" class="form-control"  placeholder="description" value="{{old('description')}}" name="description"></textarea>
                                        @if ($errors->get('description'))
                                                @foreach ($errors->get('description') as $error)
                                                <div>
                                                    <span style="color:red; font-size:13px">{{$error}}</span>
                                                </div>
                                         @endforeach
                                  @endif
                                    </div>
   
                                    <button type="submit" class="btn btn-dark">Submit</button>
                                    <a href="{{url('admin/agence/afficheagence')}}"class="btn btn-secondary" type="reset">Annuler</a>
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