import swal from "sweetalert";
import route from './route';
import {valueForm} from './inputForms';
import {chainInput,tipeInput,alertInput} from "../functions/functions_main";
let  valoresForm = valueForm(),datos,url;
chainInput(
        valoresForm.pais,
        valoresForm.tipoDoc,
        valoresForm.btnDni,
        valoresForm.nombre,
        valoresForm.apellidos,
        valoresForm.region,
        valoresForm.provincia,
        valoresForm.distrito
);
valoresForm.btnDni.on('click',function(e){
    e.preventDefault();
    /*
    let validation = tipeInput(valoresForm.tipoDoc,valoresForm.numeroDni,valoresForm.pais);
    if(!validation.status) alertInput(false,validation.message);*/
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

            }
        });
    });
                /*
           let myData = $.parseJSON(datos_dni);
           valor = (validatePropiedad(myData,['pais','tipo','numero']));  
           if(!(valor.status)){
                alertInput(valor.status,valor.message);
                  if(myData.message == 'not found'){
                      swal({
                          title: "Upps ah ocurrido un problema",
                          text: 'Por favor ingrese su Nombre y Apellido manualmente'.toUpperCase(),
                          icon: "warning",
                          buttons: "Click por favor",
                       })
                         $('#nombre').removeAttr('readonly');
                         $('#apellido').removeAttr('readonly');
                         $("#preloader").hide();
                  }else{
                      swal({
                          title: "Upps ah ocurrido un problema",
                          text: myData.message.toUpperCase(),
                          icon: "warning",
                          buttons: "Click por favor",
                       })
                       .then(() => {
                          window.location.href = 'index.php';
                       });
                  }
                   
              }else{
                   nom.val(valor['nombres']);
                   ape.val(valor['apellidoPaterno'] + ' ' +valor['apellidoMaterno']);
                   numero_doc.val(valor['numeroDocumento']);
              }
        */

/*
    valoresForm.btnDni.on('click',function(e){
        e.preventDefault();
        url = route.dni;
                datos = {
                    'tipo':tipo_doc.val(),
                    'numero':numero_doc.val(),
                    'pais':pais.val()
                };
                $.ajax({
                    headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
                    type:'POST',
                    url:url,
                    data:datos,
                    success: function(datos_dni){
                       let myData = $.parseJSON(datos_dni);
                       valor = (validatePropiedad(myData,['pais','tipo','numero']));  
                       if(!(valor.status)){
                            alertInput(valor.status,valor.message);/*
                              if(myData.message == 'not found'){
                                  swal({
                                      title: "Upps ah ocurrido un problema",
                                      text: 'Por favor ingrese su Nombre y Apellido manualmente'.toUpperCase(),
                                      icon: "warning",
                                      buttons: "Click por favor",
                                   })
                                     $('#nombre').removeAttr('readonly');
                                     $('#apellido').removeAttr('readonly');
                                     $("#preloader").hide();
                              }else{
                                  swal({
                                      title: "Upps ah ocurrido un problema",
                                      text: myData.message.toUpperCase(),
                                      icon: "warning",
                                      buttons: "Click por favor",
                                   })
                                   .then(() => {
                                      window.location.href = 'index.php';
                                   });
                              }
                               
                          }else{
                               nom.val(valor['nombres']);
                               ape.val(valor['apellidoPaterno'] + ' ' +valor['apellidoMaterno']);
                               numero_doc.val(valor['numeroDocumento']);
                          }
                    
                       }
                    });
                    
        if(inputNull(numero_doc)){
            let response;     
            
                    / 
            response = tipeInput(tipo_doc,numero_doc,pais);
            console.log(response);
            if(!(response.status)){
                swal({ 
                    title: "Upps, al parecer hubo un error",
                    text: response.message,
                    icon: "warning"
                })
            }else{
                
                 
                console.log('enviar');
            }
        }else{
            swal({ 
                title: "Upps, al parecer hubo un error",
                text: 'Por favor ingrese numero de documento',
                icon: "warning"
            })
        }
    })*/
