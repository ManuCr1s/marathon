@extends('template.template')
@section('principal')
    <div class="container-fluid maraton">
        <div class="container mb-5 p-5 paper">
            <div class="row">
                <div class="col-md-3 d-flex">
                    <i class="fa-solid fa-person-running icon-main"></i><div><p class="logo logo-short">MARATON INTENACIONAL</p><p class="logo logo-short"></p><p class="logo logo-secondary">MESETA DEL</p><p class="logo logo-main">BOMBOM</p><p class="logo logo-date">Noviembre, 5 2023</p></div>
                </div>
                <div class="col-md-9 mt-3">
                    <h2 class="text-center title-form">FICHA DE INSCRIPCION PARA LA MARATON</h2>
                </div>
            </div>
            <div class="py-3 text-center">
                <p>¡Por favor!, registrese para poder participar de la maraton internacional mas alta del mundo meseta del <b>BOM BOM</b> - 2023</p>
            </div>

            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Categorias</span>   
                        <span class="badge badge-secondary badge-pill number-bg">9</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0 d-flex justify-content-between"><span>Elite Varones</span><span>S/. 25000</span></h6>
                                    <small class="text-muted"> 42.195 kilómetros de distancia.</small>      
                                    <ul class="list-level">
                                        <li class="text-muted">
                                            <small class="text-muted">» Punto de partida: Carhuamayo  </small>          
                                        </li>
                                        <li class="text-muted">
                                            <small class="text-muted">» Punto de llegada: Estadio Daniel Alcides Carrión </small>           
                                        </li>
                                    </ul>                                   
                                </div> 
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0  d-flex justify-content-between"><span>Elite Damas</span><span>S/. 12000</span></h6>
                                    <small class="text-muted"> 21 kilómetros de distancia.</small>      
                                    <ul class="list-level">
                                        <li class="text-muted">
                                            <small class="text-muted">» Punto de partida: Villa de Pasco</small>          
                                        </li>
                                        <li class="text-muted">
                                            <small class="text-muted">» Punto de llegada: Estadio Daniel Alcides Carrión </small>           
                                        </li>
                                    </ul>     
                                </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0  d-flex justify-content-between"><span>Master</span><span>S/. 3000</span></h6>
                                    <small class="text-muted"> 16 kilómetros de distancia.</small>      
                                    <ul class="list-level">
                                        <li class="text-muted">
                                            <small class="text-muted">» Punto de partida: Colquijirca</small>          
                                        </li>
                                        <li class="text-muted">
                                            <small class="text-muted">» Punto de llegada: Estadio Daniel Alcides Carrión </small>           
                                        </li>
                                    </ul>     
                                </div>
                        
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0  d-flex justify-content-between"><span>Juveniles</span> <span>S/. 2500</span></h6>
                                    <small class="text-muted"> 13 kilómetros de distancia.</small>      
                                    <ul class="list-level">
                                        <li class="text-muted">
                                            <small class="text-muted">» Punto de partida: Grifo la Victoria </small>          
                                        </li>
                                        <li class="text-muted">
                                            <small class="text-muted">» Punto de llegada: Estadio Daniel Alcides Carrión </small>           
                                        </li>
                                    </ul>     
                                </div>
                        </li>
                        
                        <li class="list-group-item d-flex justify-content-between bg-light">
                                <div>
                                    <h6 class="my-0  d-flex justify-content-between"><span>Menores</span> <span>S/. 1000</span></h6>
                                    <small class="text-muted"> 8 kilómetros de distancia.</small>      
                                    <ul class="list-level">
                                        <li class="text-muted">
                                            <small class="text-muted">» Punto de partida: Cruce de Huánuco y Pasco</small>          
                                        </li>
                                        <li class="text-muted">
                                            <small class="text-muted">» Punto de llegada: Estadio Daniel Alcides Carrión </small>           
                                        </li>
                                    </ul>     
                                </div>
                              
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                                <div>
                                    <h6 class="my-0  d-flex justify-content-between"><span>Junior</span><span>S/. 500</span></h6>
                                    <small class="text-muted"> 6 kilómetros de distancia.</small>      
                                    <ul class="list-level">
                                        <li class="text-muted">
                                            <small class="text-muted">» Punto de partida: Arco de Bienvenida de Pasco</small>          
                                        </li>
                                        <li class="text-muted">
                                            <small class="text-muted">» Punto de llegada: Estadio Daniel Alcides Carrión </small>           
                                        </li>
                                    </ul>     
                                </div>
                             
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                                <div>
                                    <h6 class="my-0 d-flex justify-content-between"><span>Infantil</span><span>S/. 300</span></h6>
                                    <small class="text-muted"> 2 1/2 kilómetros de distancia.</small>      
                                    <ul class="list-level">
                                        <li class="text-muted">
                                            <small class="text-muted">» Punto de partida: Plaza Daniel Alcides Carrión</small>          
                                        </li>
                                        <li class="text-muted">
                                            <small class="text-muted">» Punto de llegada: Estadio Daniel Alcides Carrión </small>           
                                        </li>
                                    </ul>    
                                </div>
                          
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                                <div>
                                    <h6 class="my-0">Habilidades Especiales (Sordo y Mudo)</h6>
                                    <small class="text-muted"> 6 kilómetros de distancia.</small>      
                                    <ul class="list-level">
                                        <li class="text-muted">
                                            <small class="text-muted">» Punto de partida: Arco de Bienvenida a Pasco</small>          
                                        </li>
                                        <li class="text-muted">
                                            <small class="text-muted">» Punto de llegada: Estadio Daniel Alcides Carrión </small>           
                                        </li>
                                    </ul>    
                                </div>
                          
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                                <div>
                                    <h6 class="my-0">Habilidades Especiales (con ceguera)</h6>
                                    <small class="text-muted">2 1/2 kilómetros de distancia.</small>      
                                    <ul class="list-level">
                                        <li class="text-muted">
                                            <small class="text-muted">» Punto de partida: Plaza Daniel Alcides Carrión</small>          
                                        </li>
                                        <li class="text-muted">
                                            <small class="text-muted">» Punto de llegada: Estadio Daniel Alcides Carrión </small>           
                                        </li>
                                    </ul>    
                                </div>
                          
                        </li>
                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Registro de Datos Personales</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="country">Elija Pais</label>
                                <select class="custom-select d-block w-100" id="country" required>
                                    <option value="0">Seleccione Pais</option>
                                </select>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="document">Tipo documento <span class="text-muted"></span></label>
                                <select class="custom-select d-block w-100" id="document" required>
                                    <option value="0">Seleccione Documento</option>
                                    <option value="">Dni</option>
                                    <option value="">Ruc</option>
                                    <option value="">Carnet de Extranjeria</option>
                                </select>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="lastName">Numero Documento</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Nombres</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required readonly>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Apellidos</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required readonly>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="country">Region</label>
                                <select class="custom-select d-block w-100" id="country" required>
                                    <option value="0">Seleccione Region</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">Provincia</label>
                                <select class="custom-select d-block w-100" id="state" required>
                                    <option value="0">Seleccione Provincia</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="zip">Distrito</label>
                                <select class="custom-select d-block w-100" id="level" required>
                                    <option value="0">Seleccione Distrito</option>
                                </select>
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="mb-3">
                            <label for="level">Categorias <span class="text-muted"></span></label>
                            <select class="custom-select d-block w-100" id="level" required>
                                <option value="0">Seleccione Categoria</option>
                                <option value="">Elite Varones</option>
                                <option value="">Elite Mujeres</option>
                                <option value="">Master</option>
                                <option value="">Juveniles</option>
                                <option value="">Menores</option>
                                <option value="">Junior</option>
                                <option value="">Infantil</option>
                                <option value="">Discapacitados</option>
                            </select>
                            <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="country">Sexo</label>
                                    <select class="custom-select d-block w-100" id="country" required>
                                        <option value="">Choose...</option>
                                        <option>United States</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="state">Fecha Nacimiento</label>
                                    <input type="date" class="form-control" id="firstName" placeholder="Ingrese su Direccion" value="" required >
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Direccion</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Ingrese su Direccion" value="" required >
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Numero de Celular</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Ingrese Numero de Celular" value="" required >
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                        </div>
                        <hr class="my-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Registrarse Ahora</button>
                </form>
            </div>
            </div>
            </div>
    </div>

@endsection