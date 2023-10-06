import swal from "sweetalert";
import { onlyNumbers,chainInput,inputNull,tipeInput,validatePropiedad,alertInput} from "./functions";
import route from './route';
$(document).ready(function(){
    let numero_doc = $('#number_doc'),
        tipo_doc = $('#document'),
        pais = $('#country'),
        dni =$('#icon_search'),datos,url,valor;
        numero_doc.on('keypress',onlyNumbers);
    chainInput(pais,tipo_doc);
    dni.on('click',function(e){
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
                       alertInput(valor.status,valor.message);
                       if(!myData.status){
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
                               $('#nombre').val(myData['nombres']);
                               $('#apellido').val(myData['apellidoPaterno'] + ' ' +myData['apellidoMaterno']);
                               $('#dni').val(myData['numeroDocumento']);
                          }
                          $("#preloader").hide();
                       }
                    });
                    /*
        if(inputNull(numero_doc)){
            let response;     
            
                    /*  
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
        }*/
    })
});