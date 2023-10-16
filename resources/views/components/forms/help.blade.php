<ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0 bg-success text-white"><span>Paso uno</span></h6>
                                    <small class="text-muted"> Ingreso sus datos Personales</small>      
                                    <ul class="list-level">
                                        <li class="text-muted">
                                            <small class="text-muted">»<b> Por favor hacer click en la lupita, para buscar NOMBRES Y APELLIDOS, sino se habilitaran los campos para su registro manual</b></small>          
                                        </li>
                                        <br>
                                        <li class="text-muted">
                                            <small class="text-muted">»<b> Si seleccione Pais -> Peru, no olvide registrar su region,provincia y distrito</b></small>           
                                        </li>
                                    </ul>                                   
                                </div> 
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                                    <h6 class="my-0 bg-success text-white"><span>Paso dos</span></h6>
                                    <small class="text-muted"> Seleccione Categoria</small>   
                                    <h6 class="mb-2  d-flex justify-content-between"><span>CATEGORIA</span><span>EDADES</span></h6>
                                    
                                    <ul class="list-level">
                                        <li class="text-muted my-3">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» ELITE VARONES MUJERES</b></span><span><b>Mayores de 18</b></span></small>          
                                        </li>
                                        <li class="text-muted my-3">
                                            <small class="text-muted d-flex justify-content-between mb-2"><span><b>» MASTER</b></span><span><b>40 a más</b></span></small>        
                                        </li>
                                        <li class="text-muted my-3">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» JUVENILES</b></span><span><b>15 - 16 - 17 años</b></span></small>          
                                        </li>
                                        <li class="text-muted my-3">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» MENORES</b></span><span><b>12 - 13 - 14 años</b></span></small>          
                                        </li>
                                        <li class="text-muted my-3">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» JUNIOR</b></span><span><b>10 - 11 años</b></span></small>          
                                        </li>
                                        <li class="text-muted my-3">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» INFANTIL</b></span><span><b>7 - 8 - 9 años</b></span></small>          
                                        </li>
                                        <li class="text-muted my-3">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» HABILIDADES ESPECIALES</b></span><span><b>Sordo y Mudo</b></span></small>          
                                        </li>
                                        <li class="text-muted my-3">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» HABILIDADES ESPECIALES</b></span><span><b>Visual</b></span></small>          
                                        </li>

                                        <br>
                                        <li class="text-muted">
                                            <small class="text-muted">»<b> Tenga en cuenta su edad para seleccionar su categoria</b></small>           
                                        </li>
                                    </ul>                                   
                                </div> 
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0 bg-success text-white"><span>Paso tres</span></h6>
                                    <small class="text-muted"> Descarga de formatos</small>      
                                    <ul class="list-level">
                                        <li class="text-muted">
                                            <small class="text-muted">»<b> Por favor hacer click en el boton, DESCARGA FORMATOS, rellenarlos con su firma y huella</b></small>   
                                            <a href="{{ route('download', ['nombreArchivo' => 'FORMATOS_01_02_03_04.pdf']) }}" class="btn btn-warning d-flex justify-content-center mt-3"><i class="fa-solid fa-file icon-item"></i>DESCARGA FORMATOS</a>       
                                        </li>
                                        <br>
                                        <li class="text-muted">
                                            <small class="text-muted">»<b>Si participa de la categoria ELITE, MASTER solo es necesario los formatos 03 Y 04, para las demas categorias es obligatorio los 4 formatos</b></small>           
                                        </li>
                                    </ul>                                   
                                </div> 
                        
                        </li>
                    </ul>
