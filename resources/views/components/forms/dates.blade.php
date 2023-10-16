<form class="needs-validation" enctype="multipart/form-data" id="idForm">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="text-secondary">Registro de nombres y ubicacion</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="country">Elija Pais</label>
                                <select class="custom-select d-block w-100" id="country" name="pais" >
                                </select>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="document">Tipo documento <span class="text-muted"></span></label>
                                <select class="custom-select d-block w-100" id="document" name ="tipo" >
                                    <option value="0">Seleccione Documento</option>
                                    <option value="1">Dni</option>
                                    <option value="2">Carnet de Extranjeria</option>
                                </select>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 ">
                                <label for="lastName">Numero Documento</label>
                                <div class="row">
                                    <div class="col-md-12 d-flex">
                                        <input type="text" class="form-control" id="number_doc" name="numero" placeholder="" value="" >
                                        <button class="btn btn-primary" id="icon_search"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                                
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Nombres</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" placeholder="" value=""  readonly>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="" value=""  readonly>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="country">Region</label>
                                <select class="custom-select d-block w-100" id="region" name="region" >
                                    <option value="9999">Seleccione Region</option>
                                    <option value="1">AMAZONAS</option>
                                    <option value="2">ANCASH</option>
                                    <option value="3">APURIMAC</option>
                                    <option value="4">AREQUIPA</option>
                                    <option value="5">AYACUCHO</option>
                                    <option value="6">CAJAMARCA</option>
                                    <option value="7">CALLAO</option>
                                    <option value="8">CUSCO</option>
                                    <option value="9">HUANCAVELICA</option>
                                    <option value="10">HUANUCO</option>
                                    <option value="11">ICA</option>
                                    <option value="12">JUNIN</option>
                                    <option value="13">LA LIBERTAD</option>
                                    <option value="14">LAMBAYEQUE</option>
                                    <option value="15">LIMA</option>
                                    <option value="16">LORETO</option>
                                    <option value="17">MADRE DE DIOS</option>
                                    <option value="18">MOQUEGUA</option>
                                    <option value="19">PASCO</option>
                                    <option value="20">PIURA</option>
                                    <option value="21">PUNO</option>
                                    <option value="22">SAN MARTIN</option>
                                    <option value="23">TACNA</option>
                                    <option value="24">TUMBES</option>
                                    <option value="25">UCAYALI</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">Provincia</label>
                                <select class="custom-select d-block w-100" id="provincia" name="provincia" >
                                    <option value="9999">Seleccione Provincia</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="zip">Distrito</label>
                                <select class="custom-select d-block w-100" id="distrito"  name="distrito">
                                    <option value="9999">Seleccione Distrito</option>
                                </select>
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="text-secondary">Registro de Categoria y datos de contacto</h6>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="level">Categorias <span class="text-muted"></span></label>
                            <select class="custom-select d-block w-100" id="level" name="level" >
                                <option value="10">Seleccione Categoria</option>
                                <option value="1">Elite Varones</option>
                                <option value="2">Elite Mujeres</option>
                                <option value="3">Master</option>
                                <option value="4">Juveniles</option>
                                <option value="5">Menores</option>
                                <option value="6">Junior</option>
                                <option value="7">Infantil</option>
                                <option value="8">Habilidades Especiales (Sordo y Mudo)</option>
                                <option value="9">Habilidades Especiales (con ceguera)</option>
                            </select>
                            <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="country">Sexo</label>
                                    <select class="custom-select d-block w-100" id="genrs" name="genrs" >
                                        <option value="0">Seleccione</option>
                                        <option value="1">Fenenino</option>
                                        <option value="2">Masculino</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="state">Fecha Nacimiento</label>
                                    <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Ingrese su Direccion" value=""  >
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Direccion</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese su Direccion" value=""  >
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Numero de Celular</label>
                                    <input type="text" class="form-control" id="celular" name="celular" placeholder="Ingrese Numero de Celular" value=""  >
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                        </div>
                        <hr class="my-4">
                        <div class="row my-4">
                            <div class="col-md-6">
                                <h4 class="text-black">FORMATOS PARA ADJUNTAR</h4>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('download', ['nombreArchivo' => 'FORMATOS_01_02_03_04.pdf']) }}" class="btn btn-secondary d-flex justify-content-center"><i class="fa-solid fa-file icon-item"></i>DESCARGA FORMATOS</a>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-md-12">
                                <h5>¡Por favor!, imprimir los formatos y rellenarlos con su firma y huella dactilar. Traer impreso el dia del recojo de su kit de corredor.</h5>
                                <h5>¡OJO!, Si participa de la categoria ELITE, MASTER solo es necesario los formatos 03 Y 04, para las demas categorias es obligatorio los 4 formatos</h5>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                        <hr class="my-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Registrarse Ahora</button>
                    </form>