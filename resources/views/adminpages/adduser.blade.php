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
                        <h4 class="card-title">Ajouter Utilisateur</h4>
                        <div class="basic-form">
                            <form action="{{url('/admin/user/ajouteruser')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nom </label>
                                        <input type="text" class="form-control" name="nom"  placeholder="Nom">
                                          <div>
                                            <span style="color:red; font-size:13px"></span>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Prénom </label>
                                        <input type="text" class="form-control" name="prenom" placeholder="Prénom" >
                                        <div>
                                            <span style="color:red; font-size:13px"></span>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email"  >
                                    <div>
                                   <span style="color:red; font-size:13px"></span>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="login" placeholder="Username" >
                                    <div>
                                        <span style="color:red; font-size:13px"></span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Role</label>
                                        <select id="inputState" name="selectrole" class="form-control">
                                            <option selected="selected" value="1">Selectionné un Role</option>
                                            @foreach ($roles as $role)
                                               <option value="{{$role->id}}">{{$role->role}}</option>
                                            @endforeach
                                        </select>
                                          <div>
                                                <span style="color:red; font-size:13px"></span>
                                            </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Telephone</label>
                                        <input type="text" class="form-control"  name="telephone" >
                                         <div>
                                            <span style="color:red; font-size:13px"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="adresse" placeholder="Adresse" >
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Mot de passe</label>
                                        <input type="password" name="mdp" class="form-control"  >
                                         <div>
                                                <span style="color:red; font-size:13px"></span>
                                            </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Confirm Mot de passe</label>
                                        <input type="Password" name="cmdp" class="form-control" >
                                        <div>
                                            <span style="color:red; font-size:13px"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">

                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control" placeholder="">
                                </div>
                                <button type="submit" class="btn btn-dark">Submit</button>
                                <a href="/admin/user/afficheusers" class="btn btn-secondary">Annuler</a>
                            </form>
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

