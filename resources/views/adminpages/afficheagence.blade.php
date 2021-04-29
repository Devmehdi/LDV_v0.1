@extends('layouts.master.layout')


@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card" style="margin:130px">
                <div class="card-body">
                    <h4 class="card-title">Data Table</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Agence</th>
                                    <th>Ville</th>
                                    <th>Adresse</th>
                                    <th>Telephone</th>
                                    <th>Crée le</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($agences as $agence)
                                  <tr>
                                    <td>{{$agence->agence_name}}</td>
                                    <td>{{$agence->ville}}</td>
                                    <td>{{$agence->addresse}}</td>
                                    <td>{{$agence->agences_tel}}</td>
                                    <td>{{$agence->created_at}}</td>
                                    <td>
                                            <a href="{{url('admin/agence/'.$agence->id.'/edit')}}"><i class="zmdi zmdi-edit"></i></a>&nbsp;
                                            <a href="" data-toggle="modal" data-target="#exampleModalCenter"><i class="zmdi zmdi-view-list-alt"></i></i></a>&nbsp;
                                            <a href=""><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                              @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Vertically centered</h4>
                    <div class="bootstrap-modal">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Launch demo modal</button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sweet Confirm</h4>
                    <div class="card-content">
                        <div class="sweetalert m-t-30">
                            <button class="btn btn-warning btn sweet-confirm">Sweet Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
    </div>
</div>
@endsection

