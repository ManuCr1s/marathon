@extends('template.template')
@section('cabecera')
        <nav class="navbar navbar-expand-lg navbar-light bgd-bloom">
            <a class="navbar-brand text-white" href="#">MARATON</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
@endsection
@section('principal')
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-11">
                    <div class="card m-5">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">TABLA DE INSCRITOS</h5>
                                    <h6 class="card-subtitle mb-2 textd-desc">Visualizacion de todos los incritos</h6>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModal">
                                        INGRESE CODIGO
                                    </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    
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
                       
                            <hr>
                            <table id="inscritos" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011-04-25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011-07-25</td>
                                        <td>$170,750</td>
                                    </tr>
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

    </div>
@endsection