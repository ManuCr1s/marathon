<div>
    <form id="form_login">
        <div class="form-row justify-content-md-center my-3">
            <div class="col-lg-6 col-md-10">
                <p class="text-center"><i class="fa-solid fa-user-group icon-form"></i></p>  
            </div>
        </div>
        <div class="form-row justify-content-md-center my-3">
            <div class="col-lg-6 col-md-10">
                <label for="user">Usuario</label>
                <input type="text" class="form-control input-form" id="user" placeholder="Ingrese Usuario">
            </div>
        </div>
        <div class="form-row justify-content-md-center my-3">
            <div class="col-lg-6 col-md-10">
                <label for="pass">Contraseña</label>
                <input type="password" class="form-control input-form" id="pass" placeholder="Ingrese Contraseña">
            </div>
        </div>
        <div class="form-row justify-content-md-center my-3">
            <div class="col-lg-6 col-md-10">
                <button class="btn btn-primary btn-block btm-blue">INGRESAR</button>
                <a href="{{route('dashboard')}}">aaa</a>
            </div>
        </div>
        <div class="form-row justify-content-md-center my-3">
            <div class="col-lg-6 col-md-10">
                <p class="text-center text-pass text-pass_line-one">¿Has olvidado su contraseña?, consulte con el administrador porfavor</p>
            </div>
        </div>
    </form>
</div>