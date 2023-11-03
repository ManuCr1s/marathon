<nav class="navbar navbar-expand-lg bg-dark">
            <a class="navbar-brand text-warning" href="{{route('dashboard')}}">MARATON - 2023</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav w-100 d-flex justify-content-between">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('inscription')}}">Participantes Inscritos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('register')}}">Participantes Registrados<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <li class="nav-item dropdown">
                <data id="user" value="{{Auth::user()->dni}}"></data>
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">   
                {{Auth::user()->dni}}
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <form method="POST" action="{{route('logout')}}">
                            @csrf
                            <a href="" class="dropdown-item bg-danger text-white" onclick="event.preventDefault();
                            this.closest('form').submit();" class="text-danger" >
                                <i class="pe-7s-close-circle"></i>
                                    Cerrar Sesion
                            </a>
                    </form>

                </div>
            </li>
        </ul>
    </div>
</nav>