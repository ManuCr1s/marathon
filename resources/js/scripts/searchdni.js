import swal from "sweetalert";
import route from './route';
import {valueForm} from './inputForms';
import {tipeInput,alertInput} from "../functions/functions_main";
let  valoresForm = valueForm(),datos,url;
valoresForm.btnDni.on('click',function(e){
    e.preventDefault();
    $("#preloader").show();
    let validation = tipeInput(valoresForm.tipoDoc,valoresForm.numeroDni,valoresForm.pais);
    if(!validation.status) {
        alertInput(false,validation.message);
        $("#preloader").hide();
    }
    url = route.dni;
    datos = {
        'tipo':valoresForm.tipoDoc.val(),
        'numero':valoresForm.numeroDni.val(),
        'pais':valoresForm.pais.val()
    };
    $.ajax({
            headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
            type:'POST',
            url:url,
            data:datos,
            success: function(datos_dni){
                let myData = $.parseJSON(datos_dni);
                if(!myData.status){
                    alertInput(false,myData.message);
                    if(myData.hasOwnProperty('active')){
                        valoresForm.nombre.removeAttr('readonly');
                        valoresForm.apellidos.removeAttr('readonly');
                    }
                }else{
                    valoresForm.nombre.val(myData['nombres']);
                    valoresForm.apellidos.val(myData['apellidoPaterno'] + ' ' +myData['apellidoMaterno']);
                    valoresForm.numeroDni.val(myData['numeroDocumento']);
                }
                $("#preloader").hide();
            }
        });
    });
              