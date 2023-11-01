<form id="form_login" method='POST' action="{{route('access')}}" class="bg-white rounded shadow py-5">
    @csrf
    <div class="form-row justify-content-md-center my-3">
        <div class="col-lg-6 col-md-10">
            <p class="text-center"><i class="fa-solid fa-user-group icon-form"></i></p>  
        </div>
    </div>
    <div class="form-row justify-content-center my-3">
        <h5 class="text-center">INGRESE SUS DATOS</h5>
    </div>
    <hr class="mx-5">
    <div class="form-row justify-content-center my-3">
        <div class="col-10 px-5">
            <label for="user">Usuario</label>
            <input type="text" class="form-control input-form" value="{{old('dni')}}" id="user" name="dni" placeholder="Ingrese Usuario">
        </div>
        @error('dni')
            <span class="badge badge-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-row justify-content-center my-3">
        <div class="col-10 px-5">
            <label for="pass">Contraseña</label>
            <input type="password" class="form-control input-form" id="pass" name="password" placeholder="Ingrese Contraseña">
        </div>
        @error('password')
            <span class="badge badge-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @error('auth')
            <span class="badge badge-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-row justify-content-center my-3">
        <div class="col-10 px-5">
            <button class="btn btn-primary btn-block btm-blue">INGRESAR</button>
            <a href="{{route('welcome')}}" class="btn btn-secondary btn-block">REGRESAR</a>
        </div>
      
    </div>
 
    <div class="form-row justify-content-center my-3">
        <div class="col-10 px-5">
            <p class="text-center text-pass text-pass_line-one">¿Has olvidado su contraseña?, consulte con el administrador porfavor</p>
        </div>
    </div>
</form>