import swal from "sweetalert";
import bsCustomFileInput from 'bs-custom-file-input';
import route from './route';
import {valueForm} from './inputForms';
import {validatePropiedad,alertInput,validateInput} from "../functions/functions_main";
$(document).ready(function(){
    let valoresForm = valueForm(),form = $('#idForm'),form01=$('#format01'),form02=$('#format02'),form03=$('#format03'),form04=$('#format04'),data,url;
    bsCustomFileInput.init();
    form.on('submit',function(e){ 
        e.preventDefault();
        $("#preloader").show();
        let validation = validateInput(
            valoresForm.pais,
            valoresForm.tipoDoc,
            valoresForm.numeroDni,
            valoresForm.nombre,
            valoresForm.apellidos,
            valoresForm.region,
            valoresForm.provincia,
            valoresForm.distrito,
            valoresForm.categorias,
            valoresForm.sexo,
            valoresForm.fecha,
            valoresForm.direccion,
            valoresForm.celular,
            form01,
            form02,
            form03,
            form04
        );
        if(!(validation.status)){
            alertInput(false,validation.message);
            $("#preloader").hide();
        }else{
            data = new FormData(this);
            url = route.dates;
                    $.ajax({
                        headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
                        type:'POST',
                        url:url,
                        data:data,
                        processData: false,
                        contentType: false,
                        success: function(datos_dni){
                            let myData = $.parseJSON(datos_dni),response;
                            response = validatePropiedad(myData);
                            if(response.status == 'false'){ 
                                alertInput(false,response.message);
                            }else{
                                if(!myData.status){
                                    swal({
                                        title: "Upps ah ocurrido un problema",
                                        text: myData.message,
                                        icon: "warning",
                                        buttons: "Click por favor",
                                     }).then(()=>{
                                        window.location.reload(); 
                                    })

                                }else{
                                    swal({
                                        title: "¡Felicitaciones!",
                                        text: myData.message,
                                        icon: "success",
                                        buttons: "Descargar Codigo",
                                     }).then(()=>{
                                        window.open(myData.url, '_blank');
                                        setTimeout(function() {
                                            location.reload();
                                        }, 1000);
                                    })
                                }
                            }
                            $("#preloader").hide();
                        }
                    });
        }       
        
       
    })
});