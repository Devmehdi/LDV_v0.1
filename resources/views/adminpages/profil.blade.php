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
<!-- row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center mb-4">
                    <img src="{{url('images/user/1.png')}}" height="80" width="80" alt="">
                        <div class="media-body">
<<<<<<< HEAD
                            <h3 class="mb-0">{{$fullname}}</h3>
                            <p class="text-muted mb-0">user</p>
=======
                            <h3 class="mb-0">Zoubir Zakaria</h3>
                            <p class="text-muted mb-0">Admin</p>
>>>>>>> d6bb431a30c5b9187fb61ced6002129794775e3f
                        </div>
                    </div>
                    
                  

                    <h4>Adresse</h4>
<<<<<<< HEAD
                    <p class="text-muted">{{$users->addresse}}</p>
                    <ul class="card-profile__info">
                        <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>{{$users->telephone}}</span></li>
                        <li><strong class="text-dark mr-4">Email</strong> <span>{{$users->email}}</span></li>
                        <li><strong class="text-dark mr-4">User name</strong> <span>{{$users->username}}</span></li>
                    </ul>
                    <div class="col-12 text-center">
                        <a href="{{url('/admin/userprofil/'.$users->id.'/edit')}}"class="btn btn-danger px-5">Modifier</a>
                    </div>
=======
                    <p class="text-muted">jamila 5 rue 4 .. cd casablanca </p>
                    <ul class="card-profile__info">
                        <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>01793931609</span></li>
                        <li><strong class="text-dark mr-4">Email</strong> <span>name@domain.com</span></li>
                        <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>01793931609</span></li>
                        <li><strong class="text-dark mr-4">User name</strong> <span>zoubir</span></li>
                    </ul>
                    <div class="col-12 text-center">
                                        <button class="btn btn-danger px-5">Modifier</button>
                                    </div>
>>>>>>> d6bb431a30c5b9187fb61ced6002129794775e3f
                </div>
            </div>  
        </div>
       
    </div>
</div>
<!-- #/ container -->
</div>
@endsection