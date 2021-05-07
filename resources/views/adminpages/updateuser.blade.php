@extends('layouts.master.layout')


@section('content')
<div class="content-body">

  
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
           
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Modifier Utilisateur</h4>
                        <div class="basic-form">
                            <form action="{{url('admin/user/'.$user->id)}}" method="POST">
                                <input type="hidden" name="_method" value="PUT">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nom </label>
                                        <input type="text" class="form-control" name="nom" value="{{$user->nom}}" placeholder="Email">
                                          <div>
                                            <span style="color:red; font-size:13px"></span>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Prénom </label>
                                        <input type="text" class="form-control" name="prenom" placeholder="Email" value="{{$user->prenom}}">
                                        <div>
                                            <span style="color:red; font-size:13px"></span>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{$user->email}}" readonly>
                                    <div>
                                   <span style="color:red; font-size:13px"></span>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="login" placeholder="Username" value="{{$user->username}}" readonly>
                                    <div>
                                        <span style="color:red; font-size:13px"></span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Role</label>
                                        <select id="inputState" name="selectrole" class="form-control">
                                            <option selected="selected">Choose...</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                          <div>
                                                <span style="color:red; font-size:13px"></span>
                                            </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Telephone</label>
                                        <input type="text" class="form-control"  name="telephone" value="{{$user->telephone}}">
                                         <div>
                                            <span style="color:red; font-size:13px"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="adresse" placeholder="Adresse" value="{{$user->addresse}}">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Mot de passe</label>
                                        <input type="password" name="mdp" class="form-control" value="{{$user->password}}" readonly>
                                         <div>
                                                <span style="color:red; font-size:13px"></span>
                                            </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Confirm Mot de passe</label>
                                        <input type="Password" name="cmdp" class="form-control" value="{{$user->password}}" readonly>
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
    </div>
    <!-- #/ container -->
</div>

@endsection

