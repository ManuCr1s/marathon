import 'datatables.net-dt/css/jquery.dataTables.css';
import 'datatables.net'; 
import 'datatables.net-rowgroup-dt';
import route from './route';
import {data,edades} from '../functions/functions_date';
export function tables(indentifyTable){
    let nameTable = $(indentifyTable),edad;
    let table = nameTable.DataTable({
        'ajax':route.listadoI,
        order:[[3, 'desc']],
        'columns':[
            {data:'number_doc'},
            {data:'name'},
            {data:'lastname'},
            {data:'nombre'},
            {
                render: function(data, type, row) {
                        switch (row.nombre) {
                            case 'MASTER':
                                    edad = edades(row.born);
                                    return (edad.year<40)?'<div class="row bg-warning">No cumple: tiene '+edad.edad+'</div>':row.born;
                            case 'JUVENILES':
                                    edad = edades(row.born);
                                    return (edad.year<14 || edad.year>17)?'<div class="row bg-warning">No cumple: tiene '+edad.edad+'</div>':row.born;
                            case 'MENORES':
                                    edad = edades(row.born);
                                    return (edad.year<11 || edad.year>14)?'<div class="row bg-warning">No cumple: tiene '+edad.edad+'</div>':row.born;
                            case 'JUNIOR':
                                    edad = edades(row.born);
                                    return (edad.year<10 || edad.year>11)?'<div class="row bg-warning">No cumple: tiene '+edad.edad+'</div>':row.born;
                            case 'INFANTIL':
                                    edad = edades(row.born);
                                    return (edad.year<6 || edad.year>9)?'<div class="row bg-warning">No cumple: tiene '+edad.edad+'</div>':row.born;
                            default:
                                return row.born;
                        }
                },
                orderable: false,                
            },
            {data:'number_ins'},
            {
                render: function(data, type, row) {
                    return '<div class="row"><input type="text" id="'+row.number_doc+'" class="form-control col-md-2"/><button class="editar btn btn-primary col-md-2"><i class="fa-solid fa-floppy-disk"></i></button>';
                },
                orderable: false,
            }
        ],
        rowGroup:{
            dataSrc: 'nombre',
        } 
    });
    data('#inscritos tbody',table);
}
