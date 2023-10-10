import './count';
import './searchdni';
import {valueForm} from './inputForms';
import {onlyNumbers} from '../functions/functions_date';
$(document).ready(function(){
    let numeroDni = $('#number_doc'),
        celular =  $('#celular');
    let valuesForm = valueForm();
    /*EVENTO DE PULSO*/
    numeroDni.on('keypress',onlyNumbers);
    celular.on('keypress',onlyNumbers);
});