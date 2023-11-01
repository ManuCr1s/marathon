@extends('template.template')
@section('cabecera')
    <x-navs.seconds/>
@endsection
@section('principal')
<div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-11">
                    <div class="card m-5">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">TABLA DE REGISTRADOS</h5>
                                    <h6 class="card-subtitle mb-2 textd-desc">Visualizacion de todos los registrados a la maraton 2023</h6>
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
                            <table id="registros" class="display" style="width:100%">
                            <thead>
                                    <tr>
                                        <th>DNI</th>
                                        <th>NOMBRES</th>
                                        <th>APELLIDOS</th>
                                        <th>CATEGORIA</th>
                                        <th>CODIGO</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>DNI</th>
                                        <th>NOMBRES</th>
                                        <th>APELLIDOS</th>
                                        <th>CATEGORIA</th>
                                        <th>CODIGO</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
            </div>
        </div>

    </div>
@endsection