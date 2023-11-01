@extends('template.template')
@section('principal')
    <div class="container-fluid maraton">
        <div class="container mb-5 p-5 paper">
            <div class="row">
                <div class="col-md-3">
                    <a class="navbar-brand d-flex" href="{{route('welcome')}}"><i class="fa-solid fa-person-running icon-main"></i><div><p class="logo logo-short">MARATON INTENACIONAL</p><p class="logo logo-short"></p><p class="logo logo-secondary">MESETA DEL</p><p class="logo logo-main">BOMBON</p><p class="logo logo-date">Noviembre, 5 2023</p></div></a>
                </div>
                <div class="col-md-9 mt-3">
                    <h2 class="text-center title-form">FICHA DE INSCRIPCION PARA LA MARATON</h2>
                </div>
            </div>
            <div class="py-3 text-center">
                <p class="d-none d-md-block">¡Por favor!, registrese para poder participar de la maraton internacional mas alta del mundo meseta del <b>BOMBON</b> - 2023</p>
            </div>

            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-danger d-none d-md-block">Por favor lea las instrucciones</span>  
                        {{-- 
                        <span class="badge badge-secondary badge-pill number-bg">9</span>
                        --}}
                    </h4>
                    <x-forms.help/>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Registro de Datos Personales</h4>
                <x-forms.dates/>
            </div>
            </div>
            </div>
    </div>

@endsection