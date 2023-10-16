@extends('template.template')
@section('principal')
    <div class="container-fluid">
        <div class="container">
                <x-navs.main/>
                <div class="row">
                    <x-sliders.banner/>
                </div>
                <div class="row mt-5 ">
                    <div class="col-md-4"><p class="text-second">
                        <i class="fa-solid fa-shoe-prints mr-4"></i>La carrera comienza en:</p>
                    </div>
                    <div class="col-md-8 d-flex justify-content-center">
                        <div id="contador"></div>
                    </div>
                </div>
                <hr>
                <div class="row my-5 ">
                    <div class="col-md-12"><p class="text-second">
                        <h5 class="text-center text-second">Fecha maxima de Inscripcion:</h5>
                        <h5 class="text-center text-second"><b> 2 de Noviembre del 2023</b></h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6"></div>
                </div>

                <div class="row ">
                    <div class="col-sm-4">
                        <a href="{{ route('download', ['nombreArchivo' => 'BASES_DE_LA_MARATON_INTERNCIONAL_2023.pdf']) }}" class="item-link d-flex justify-content-center"><i class="fa-solid fa-file icon-item"></i>DESCARGA BASES DEL CONCURSO</a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{route('form')}}" class="item-link d-flex justify-content-center"><i class="fa-solid fa-pencil icon-item"></i>FORMULARIO DE INSCRIPCION</a>
                    </div>
                    <div class="col-sm-4 d-flex justify-content-center">
                            <!-- Button trigger modal -->
                            <button type="button" class="item-link border-0" data-toggle="modal" data-target=".bd-example-modal-xl">
                                <i class="fa-solid fa-phone-volume icon-item"></i>CONTACTANOS
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="row bg-blue">
                                            <div class="col-md-8 d-flex justify-content-center">
                                                <img src="{{asset('assets/img/contacto.jpg')}}" alt="" class="w-75 p-3">
                                            </div>
                                            <div class="col-md-4 p-5">
                                                <h3 class="text-center text-white"><b>Números de Contactos</b></h3>
                                                <h6 class="text-center text-white">Por favor sirvase llamar a los siguiente numeros, para cualquier consulta</h6>
                                                    <h3 class="text-center text-warning"><b>963 957 394</b></h3>
                                                    <h3 class="text-center text-warning"><b>934 292 007</b></h3>
                                                    <h3 class="text-center text-warning"><b>935 964 991</b></h3>
                                                <hr>
                                                <h6 class="text-center text-white">Soporte si tiene problema de su inscripcion</h6>
                                                    <h3 class="text-center text-warning"><b>910 108 053</b></h3>
                                                    <h3 class="text-center text-warning"><b>943 985 026</b></h3>
                                                    <h3 class="text-center text-warning"><b>912 864 189</b></h3>
                                                    
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <hr class="my-5">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center my-5">
                        <div class="row w-75">
                            <div class="col-md-2 col-sm-4">
                                <img src="{{asset('assets/img/Coopac.jpeg')}}"  class="img-logo" alt="">
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <img src="{{asset('assets/img/Irun.jpeg')}}"  class="img-logo" alt="">
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <img src="{{asset('assets/img/Milpo.jpeg')}}"  class="img-logo" alt="">
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <img src="{{asset('assets/img/muni_tinya.jpeg')}}"  class="img-logo" alt="">
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <img src="{{asset('assets/img/mundo_zapatillas.jpeg')}}"  class="img-logo" alt="">
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <img src="{{asset('assets/img/muni_carhuamayo.jpeg')}}"  class="img-logo" alt="">
                            </div>
                        </div>
                        
                    </div>
                
                    <div class="col-md-12 d-flex justify-content-center mt-2 mb-5">
                        <div class="row w-75">
                            <div class="col-md-2">
                               
                            </div>
                            <div class="col-md-2">
                                <img src="{{asset('assets/img/muni_nina.jpeg')}}"  class="img-logo" alt="">
                            </div>
                            <div class="col-md-2">
                                <img src="{{asset('assets/img/portada.png')}}"  class="img-logo" alt="">
                            </div>
                            <div class="col-md-2">
                                <img src="{{asset('assets/img/gorepa.png')}}"  class="img-logo" alt="">
                            </div>
                            <div class="col-md-2">
                                <img src="{{asset('assets/img/mm_volvo.jpeg')}}"  class="img-logo" alt="">
                            </div>
                            <div class="col-md-2">
                               
                            </div>
                        </div>
                        
                    </div>

                </div>
                
                
            </div>
        </div>
        <div class="row bg-dark"><div class="col-md-12"><p class="text-white text-foot text-center">© Maratón Internacional Meseta del BomBón 2023</p></div></div>
    </div>
@endsection