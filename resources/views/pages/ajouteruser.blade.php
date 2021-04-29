@extends('layouts.master.layout')


@section('content')
<div class="content-body">

  
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
           
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Vertical Form</h4>
                        <div class="basic-form">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nom </label>
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                   
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Prénom </label>
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                   
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="email" class="form-control" placeholder="1234 Main St">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Role</label>
                                        <select id="inputState" class="form-control">
                                            <option selected="selected">Choose...</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Telephone</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="1234 Main St">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Mot de passe</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Confirm Mot de passe</label>
                                        <input type="Password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Image</label>
                                    <input type="file" class="form-control" placeholder="">
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