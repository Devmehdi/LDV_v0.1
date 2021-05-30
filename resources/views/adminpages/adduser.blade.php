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
                                        <label>Nom <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" name="nom" value="{{old('nom')}}"  placeholder="Nom" required>
                                        @if ($errors->get('nom'))
                                        @foreach ($errors->get('nom') as $error)
                                        <div>
                                            <span style="color:red; font-size:13px">{{$error}}</span>
                                        </div>
                                @endforeach
                               @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Prénom <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" name="prenom" value="{{old('prenom')}}"  placeholder="Prénom" required>
                                        @if ($errors->get('prenom'))
                                        @foreach ($errors->get('prenom') as $error)
                                        <div>
                                            <span style="color:red; font-size:13px">{{$error}}</span>
                                        </div>
                                @endforeach
                               @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label>Email <span style="color:red">*</span></label>
                                        <input type="email" class="form-control" name="email" value="{{old('email')}}"  placeholder="Email"  required>
                                        @if ($errors->get('email'))
                                        @foreach ($errors->get('email') as $error)
                                        <div>
                                            <span style="color:red; font-size:13px">{{$error}}</span>
                                        </div>
                                @endforeach
                               @endif
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Username <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" value="{{old('login')}}" name="login" placeholder="Username" required>
                                        @if ($errors->get('login'))
                                        @foreach ($errors->get('login') as $error)
                                        <div>
                                            <span style="color:red; font-size:13px">{{$error}}</span>
                                        </div>
                                @endforeach
                               @endif
                                    </div>
                            </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Role <span style="color:red">*</span></label>
                                        <select id="inputState" name="selectrole" value="{{old('selectrole')}}" class="form-control" required>
                                            <option selected="selected" value="1">Selectionné un Role</option>
                                            @foreach ($roles as $role)
                                               <option value="{{$role->id}}">{{$role->role}}</option>
                                            @endforeach
                                        </select>
                                         
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Telephone <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control"  value="{{old('selectrole')}}" name="telephone" required>
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
                                    <input type="text" class="form-control" name="adresse" value="{{old('selectrole')}}" placeholder="Adresse" required>
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
                                                      <option  value={{$agence->id}}>{{$agence->agence_name}}</option>
                                                    @endforeach
                                            </select>
                                      
                                    
                                </div>
 
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Mot de passe <span style="color:red;">*</span></label>
                                        <input type="password" name="mdp" value="{{old('mdp')}}" class="form-control" required >
                                        @if ($errors->get('mdp'))
                                        @foreach ($errors->get('mdp') as $error)
                                        <div>
                                            <span style="color:red; font-size:13px">{{$error}}</span>
                                        </div>
                                @endforeach
                            @endif 

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Confirm Mot de passe <span style="color:red;">*</span></label>
                                        <input type="Password" name="cmdp" value="{{old('cmdp')}}" class="form-control" required>
                                        @if ($errors->get('cmdp'))
                                                @foreach ($errors->get('cmdp') as $error)
                                                    <div>
                                                        <span style="color:red; font-size:13px">{{$error}}</span>
                                                    </div>
                                                @endforeach
                                         @endif 
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    
                                    <label>Image </label>
                                    <input type="file" name="image" value="{{old('image')}}" class="form-control" placeholder="">
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

