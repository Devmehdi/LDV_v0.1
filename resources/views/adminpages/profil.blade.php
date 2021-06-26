@extends('layouts.master.layout')

@section('content')
<div class="content-body">

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Utilisateur</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center mb-4">
                    <img src="{{url('images/users/'.$users->image)}}" height="80" width="80" alt="">&nbsp;&nbsp;&nbsp;
                        <div class="media-body">
                            <h3 class="mb-0">{{$fullname}}</h3>
                            <p class="text-muted mb-0">Admin</p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Username <span></label>
                            <input type="text" value="{{$users->username}}"  class="form-control" disabled>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Email</span></label>
                          <input type="text" value="{{$users->email}}"  class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Telephone </label>
                            <input type="text" value="{{$users->telephone}}"  class="form-control" disabled>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Adresse</label>
                          <input type="text" value="{{$users->addresse}}"  class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Bio</label>
                        <textarea rows="10" class="form-control" disabled></textarea>
                    </div>
                    <div class="col-12">
                        <a href="{{url('/admin/userprofil/'.$users->id.'/edit')}}"class="btn btn-secondary">Modifier</a>
                    </div>
                </div>
            </div>  
        </div>
       
    </div>
</div>
<!-- #/ container -->
</div>
@endsection