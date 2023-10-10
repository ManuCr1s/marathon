import swal from "sweetalert";
import bsCustomFileInput from 'bs-custom-file-input';
import route from './route';
$(document).ready(function(){
    let form = $('#idForm'),data,url;
    bsCustomFileInput.init();
    form.on('submit',function(e){ 
        e.preventDefault();
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
                        let myData = $.parseJSON(datos_dni);
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
                });
       
    })
});