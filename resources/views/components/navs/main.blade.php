<div class="row mt-5 mb-3">
    <div class="col-md-12 d-flex justify-content-end">
       <a href="#" class="link-verificacion">Verifica tu Inscripcion<i class="fa-solid fa-print ml-2"></i></a>
    </div>
</div>
<hr>
<nav class="navbar navbar-expand-lg navbar-white bg-white">
        <a class="navbar-brand d-flex" href="{{route('welcome')}}"><i class="fa-solid fa-person-running icon-main"></i><div><p class="logo logo-short">MARATON INTENACIONAL</p><p class="logo logo-short"></p><p class="logo logo-secondary">MESETA DEL</p><p class="logo logo-main">BOMBOM</p><p class="logo logo-date">Noviembre, 5 2023</p></div></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link nav-items" href="{{route('welcome')}}">Inicio <p class="nav-items-secondary">Ingreso Principal</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-items" href="{{route('form')}}">Formulario <p class="nav-items-secondary">Registro Inscripcion</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-items" href="{{ route('download', ['nombreArchivo' => 'BASES_DE_LA_MARATON_INTERNCIONAL_2023.pdf']) }}">Bases <p class="nav-items-secondary">Documentos Inscripcion</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-items" href="#">Voluntarios <p class="nav-items-secondary">Ingreso Funcionarios</p></a>
                </li>
            </ul>
            
        </div>
</nav>