@extends('template.template')
@section('principal')
    <div class="container-fluid">
        <div class="container">
                <x-navs.main/>
                <div class="row">
                    <x-sliders.banner/>
                </div>
                <div class="row mt-5 ">
                    <div class="col-md-4"><p class="text-second"><i class="fa-solid fa-shoe-prints mr-4"></i>La carrera comienza en:</p></div>
                    <div class="col-md-8 d-flex justify-content-center">
                        <div id="contador"></div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6"></div>
                </div>

                <div class="row ">
                    <div class="col-sm-4 d-flex justify-content-center">
                        <a href="{{ route('download', ['nombreArchivo' => 'BASES_DE_LA_MARATON_INTERNCIONAL_2023.pdf']) }}" class="item-link"><i class="fa-solid fa-file icon-item"></i>DESCARGA BASES DEL CONCURSO</a>
                    </div>
                    <div class="col-sm-4 d-flex justify-content-center">
                        <a href="{{route('form')}}" class="item-link"><i class="fa-solid fa-pencil icon-item"></i>FORMULARIO DE INSCRIPCION</a>
                    </div>
                    <div class="col-sm-4 d-flex justify-content-center">
                        <button type="button" class="item-link border-0" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="fa-solid fa-phone-volume icon-item"></i>CONTACTANOS
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
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

                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center my-5">
                        <div class="row w-75">
                            <div class="col-md-2">
                                <img src="{{asset('assets/img/Coopac.jpeg')}}"  class="img-logo" alt="">
                            </div>
                            <div class="col-md-2">
                                <img src="{{asset('assets/img/Irun.jpeg')}}"  class="img-logo" alt="">
                            </div>
                            <div class="col-md-2">
                                <img src="{{asset('assets/img/Milpo.jpeg')}}"  class="img-logo" alt="">
                            </div>
                            <div class="col-md-2">
                                <img src="{{asset('assets/img/Coopac.jpeg')}}"  class="img-logo" alt="">
                            </div>
                            <div class="col-md-2">
                                <img src="{{asset('assets/img/Coopac.jpeg')}}"  class="img-logo" alt="">
                            </div>
                            <div class="col-md-2">
                                <img src="{{asset('assets/img/Coopac.jpeg')}}"  class="img-logo" alt="">
                            </div>
                        </div>
                        
                    </div>
                
                </div>
                
                
            </div>
        </div>
        <div class="row bg-dark"><div class="col-md-12"><p class="text-white text-foot text-center">© Maratón Internacional Meseta del Bom Bom 2023</p></div></div>
    </div>
@endsection