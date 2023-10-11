import './count';
import './searchdni';
import './date';
import route from './route';
import {valueForm} from './inputForms';
import {onlyNumbers} from '../functions/functions_date';
import {chainInput,chainInput2,dependency,dependency2} from "../functions/functions_main";
$(document).ready(function(){
    $("#preloader").hide();
    let valoresForm = valueForm(),form01=$('#form01'),form02=$('#form02');
    /*EVENTO DE PULSO*/
    valoresForm.numeroDni.on('keypress',onlyNumbers);
    valoresForm.celular.on('keypress',onlyNumbers);
    /*EVENTO DE SELCCION*/
    chainInput2(
        valoresForm.categorias,
        valoresForm.sexo,
        form01,
        form02
    );
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
    dependency(
        valoresForm.region,
        route.provincia,
        valoresForm.provincia,
    )
    dependency2(
        valoresForm.provincia,
        route.distrito,
        valoresForm.distrito,
    )
});