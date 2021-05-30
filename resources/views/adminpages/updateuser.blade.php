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
                            <form action="{{url('admin/user/'.$user->id)}}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nom <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" name="nom" value="{{$user->Nom}}" placeholder="Nom">
                                        @if ($errors->get('nom'))
                                            @foreach ($errors->get('nom') as $error)
                                                    <div>
                                                        <span style="color:red; font-size:13px">{{$error}}</span>
                                                    </div>
                                            @endforeach
                                       @endif 
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Prénom <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" name="prenom" placeholder="Prénom" value="{{$user->prenom}}">
                                        @if ($errors->get('prenom'))
                                                @foreach ($errors->get('prenom') as $error)
                                                        <div>
                                                            <span style="color:red; font-size:13px">{{$error}}</span>
                                                        </div>
                                                @endforeach
                                        @endif 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email <span style="color:red;">*</span></label>
                                    <input type="email" class="form-control" name="email" placeholder="E-mail" value="{{$user->email}}" readonly>
                                    @if ($errors->get('email'))
                                        @foreach ($errors->get('email') as $error)
                                                <div>
                                                    <span style="color:red; font-size:13px">{{$error}}</span>
                                                </div>
                                        @endforeach
                                     @endif 
                                </div>
                                <div class="form-group" hidden>
                                    <label>Username <span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" name="login" placeholder="Username" value="{{$user->username}}" readonly>
                                    @if ($errors->get('login'))
                                        @foreach ($errors->get('login') as $error)
                                                <div>
                                                    <span style="color:red; font-size:13px">{{$error}}</span>
                                                </div>
                                        @endforeach
                                     @endif 
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Role <span style="color:red;">*</span></label>
                                        <select id="inputState" name="selectrole" class="form-control">
                                            <option selected="selected" value="1">Selectionné un Role</option>
                                                @foreach ($roles as $role)
                                                   <option value="{{$role->id}}" {{$user->role_id == $role->id  ? 'selected' : ''}}>{{$role->role}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Telephone <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control"  name="telephone" value="{{$user->telephone}}">
                                        @if ($errors->get('telephone'))
                                                @foreach ($errors->get('telephone') as $error)
                                                        <div>
                                                            <span style="color:red; font-size:13px">{{$error}}</span>
                                                        </div>
                                                @endforeach
                                          @endif 
                                    </div>
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Address <span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" name="adresse" placeholder="Adresse" value="{{$user->addresse}}">
                                    @if ($errors->get('adresse'))
                                            @foreach ($errors->get('adresse') as $error)
                                                    <div>
                                                        <span style="color:red; font-size:13px">{{$error}}</span>
                                                    </div>
                                            @endforeach
                                     @endif 
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Agence <span style="color:red">*</span></label>
                                    <select id="inputState" name="agence" value="{{old('agence')}}" required class="form-control">
                                        <option selected="selected">Sélectionné l'agence</option>
                                                @foreach ($agences as $agence)
                                                  <option  value={{$agence->id}} {{$user->agence_id == $agence->id  ? 'selected' : ''}}>{{$agence->agence_name}}</option>
                                                @endforeach
                                        </select>
                                  
                                </div>
                                  
                            </div>
                                <div class="form-row" hidden>
                                    <div class="form-group col-md-6">
                                        <label>Mot de passe</label>
                                        <input type="password" name="mdp"  class="form-control" value="{{$user->password}}" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Confirm Mot de passe</label>
                                        <input type="Password" name="cmdp" class="form-control" value="{{$user->password}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group col-md-6" hidden>
                                    <img src="{{url('images/users/'.$user->image)}}" width="150px">
                                    <br>
                                    <label >Image</label>
                                    <input type="file" name="image"  class="form-control" placeholder="" readonly>
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

