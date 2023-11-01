import './count';
import './searchdni';
import './date';
import route from './route';
import {valueForm} from './inputForms';
import {onlyNumbers} from '../functions/functions_date';
import {chainInput,chainInput2,dependency,dependency2,country,countLevel} from "../functions/functions_main";
import { tables } from './datatables';
$(document).ready(function(){
    $("#preloader").hide();
    if(window.location.href === route.form){
        let valoresForm = valueForm();
        valoresForm.numeroDni.on('keypress',onlyNumbers);
        valoresForm.celular.on('keypress',onlyNumbers);
        country(valoresForm.pais,route.pais);
        chainInput2(valoresForm.categorias,valoresForm.sexo);
        chainInput(valoresForm.pais,valoresForm.tipoDoc,valoresForm.btnDni,valoresForm.nombre,valoresForm.apellidos,valoresForm.region,valoresForm.provincia,valoresForm.distrito);
        dependency(valoresForm.region,route.provincia,valoresForm.provincia);
        dependency2(valoresForm.provincia,route.distrito,valoresForm.distrito);
    }
    if(window.location.href === route.main)countLevel(route.categoria); 
    if(window.location.href === route.inscription)tables('#inscritos');
    if(window.location.href === route.register)tables('#registros');
});