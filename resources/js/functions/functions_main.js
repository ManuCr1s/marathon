/*Para el formulario de busqueda de DNI*/
export function chainInput(input,type,btn,nom,ape,reg,pro,dist){
    input.on('change',function(){
        if((input.val() == 1)){
            type.addClass('disabled-input');
            reg.removeClass('disabled-input');
            dist.removeClass('disabled-input');
            pro.removeClass('disabled-input');
            type.val('1');
            btn.removeClass('d-none');   
            nom.attr('readonly','');
            ape.attr('readonly','');  
        }else if((input.val() == 0)){
            type.removeClass('disabled-input');
            reg.removeClass('disabled-input');
            dist.removeClass('disabled-input');
            pro.removeClass('disabled-input');
            type.val('0');
            btn.removeClass('d-none');  
            nom.attr('readonly','');
            ape.attr('readonly','');  
        }else if((input.val() != 1)){
            type.addClass('disabled-input');
            reg.addClass('disabled-input');
            dist.addClass('disabled-input');
            pro.addClass('disabled-input');
            type.val('2');
            btn.addClass('d-none');  
            nom.removeAttr('readonly');  
            ape.removeAttr('readonly');  
        }
    });
}
export function tipeInput(tipo,numero,pais){
    if(pais.val() != 0){
        if(pais.val() == 1){
            if(tipo.val() == 1){
                console.log(numero.val().length );
                if(numero.val().length != 8) return {'status':false,'message':'Por favor ingrese un numero de DNI valido'}; 
            }else if(tipo.val() == 0){
                return {'status':false,'message':'Por favor selccione Tipo de Documento'};
            }
        }else{
            if(tipo.val() == 2){
                if(numero.val().length != 20) return {'status':false,'message':'Por favor ingrese un numero de Carnet de Extranjeria valido'};
            }else if(tipo.val() == 0){
                return {'status':false,'message':'Por favor selccione Tipo de Documento'};
            }
        }
    }else{
        return {'status':false,'message':'Por favor selccione Pais de origen'};
    }
    return {'status':true};
}

/*Par5a el formulario de ingreso de datos*/
export function validateInput(pais,tipo,numero,nombre,apellido,region,provincia,distrito,categoria,sexo,fecha,direcccion,celular){
    if(!(valueInput(pais)))return {'status':false, 'message':'Por favor Seleccione su Pais'}
    if(!(valueInput(tipo)))return {'status':false, 'message':'Por favor Seleccione su Documento'}
    if(!(inputNull(numero)))return {'status':false, 'message':'Por favor ingrese su numero de documento'}
    if(!(inputNull(nombre)))return {'status':false, 'message':'Por favor ingrese su nombre para su inscripcion'}
    if(!(inputNull(apellido)))return {'status':false, 'message':'Por favor ingrese su apellido para su inscripcion'}
    if(pais.val() == 1){
        if(valueInput(region))return {'status':false, 'message':'Por favor ingrese su Region'}
        if(valueInput(provincia))return {'status':false, 'message':'Por favor ingrese su Provincia'}
        if(valueInput(distrito))return {'status':false, 'message':'Por favor ingrese su Distrito'}
    }
    if(valueInput(categoria))return {'status':false, 'message':'Por favor ingrese su Categoria'}
    if(valueInput(sexo))return {'status':false, 'message':'Por favor ingrese su Sexo'}
    if(inputNull(fecha))return {'status':false, 'message':'Por favor ingrese su Fecha de Nacimiento'}
    if(inputNull(direcccion))return {'status':false, 'message':'Por favor ingrese su direccion'}
    if(inputNull(celular))return {'status':false, 'message':'Por favor ingrese su numero de celular'}
}
export function chainInput2(level,sexo,formato01,formato02){
    level.on('change',function(){
        if((level.val() == 1)){
            sexo.val(2); 
            sexo.addClass('disabled-input');
            formato02.addClass('d-none');          
            formato01.addClass('d-none');
        }else if((level.val() == 2)){
            sexo.val(1);
            sexo.addClass('disabled-input');
            formato02.addClass('d-none');          
            formato01.addClass('d-none');
        }else if((level.val() == 3)){
            sexo.removeClass('disabled-input');
            sexo.val(0);
            formato02.addClass('d-none');          
            formato01.addClass('d-none');
        }
        else{
            formato02.removeClass('d-none');          
            formato01.removeClass('d-none');
            sexo.removeClass('disabled-input');
            sexo.val(0);
        }
    });
}

/*Para todos los formulario*/
export function alertInput(status,message){
    if(!status){
        swal({
            title: "Upps ah ocurrido un problema",
            text: message,
            icon: "warning",
            buttons: "Click por favor",
         })
    }else{
        swal({
            title: "¡Felicitaciones!",
            text: message,
            icon: "success",
            buttons: "Click por favor",
         })
    }
}





export function validatePropiedad(objeto){
    let primerError;
    for (var propiedad in objeto) {
        if (objeto[propiedad].length > 0) {
            primerError = objeto[propiedad][0];
            break; 
        }
    }
    return primerError;
}
