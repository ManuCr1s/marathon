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
                                    <h5 class="card-title">TABLAS DE INSCRITOS</h5>
                                    <h6 class="card-subtitle mb-2 textd-desc">Visualizacion de todos los incritos y registrados </h6>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <a href="{{route('inscription')}}" class="btn btn-secondary btn-sm m-3"> PARTICIPANTES INSCRITOS</a>
                                    <a href="{{route('register')}}" class="btn btn-secondary btn-sm m-3"> PARTICIPANTES REGISTRADOS</a>
                                </div>
                            </div>            
                        </div>
                    </div>
            </div>
        </div>

    </div>
@endsection