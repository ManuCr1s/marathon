import 'datatables.net-dt/css/jquery.dataTables.css';
import 'datatables.net'; 
import 'datatables.net-rowgroup-dt';
import jszip from 'jszip';
import pdfmake from 'pdfmake';
import 'datatables.net-buttons-dt';
import 'datatables.net-buttons/js/buttons.colVis.mjs';
import 'datatables.net-buttons/js/buttons.html5.mjs';
import 'datatables.net-buttons/js/buttons.print.mjs';
import route from './route';
import {data,edades} from '../functions/functions_date';
import pdfMake from "pdfmake/build/pdfmake";
import pdfFonts from "pdfmake/build/vfs_fonts";
pdfMake.vfs = pdfFonts.pdfMake.vfs;
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
                                    return (edad.year<40)?'<div class="row bg-warning">Tiene '+edad.edad+' '+row.born+'</div>':row.born;
                            case 'JUVENILES':
                                    edad = edades(row.born);
                                    return (edad.year<14 || edad.year>17)?'<div class="row bg-warning">Tiene '+edad.edad+' '+row.born+'</div>':row.born;
                            case 'MENORES':
                                    edad = edades(row.born);
                                    return (edad.year<11 || edad.year>14)?'<div class="row bg-warning">Tiene '+edad.edad+' '+row.born+'</div>':row.born;
                            case 'JUNIOR':
                                    edad = edades(row.born);
                                    return (edad.year<10 || edad.year>11)?'<div class="row bg-warning">Tiene '+edad.edad+' '+row.born+'</div>':row.born;
                            case 'INFANTIL':
                                    edad = edades(row.born);
                                    return (edad.year<6 || edad.year>9)?'<div class="row bg-warning">Tiene '+edad.edad+' '+row.born+'</div>':row.born;
                            default:
                                return row.born;
                        }
                },
                orderable: false,                
            },
            {data:'number_ins'},
            {
                render: function(data, type, row) {
                    return '<div class="row"><input type="text" id="'+row.number_doc+'" class="form-control col-md-8"/><button class="editar btn btn-primary col-md-4"><i class="fa-solid fa-floppy-disk"></i></button>';
                },
                orderable: false,
            }
        ],
        rowGroup:{
            dataSrc: 'nombre',
        } 
    });
    data('#inscritos tbody',table,route.updateI);
}
export function tablesR(indentifyTable){
    let nameTable = $(indentifyTable);
    let table = nameTable.DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'csvHtml5',
                className:'btn btn-success',
                orientation: 'landscape',
                text:'DESCARGAR EXCEL',
                title:'Reporte de los registrados',
                filename: 'Maraton_2023'
            },
            {
                extend: 'pdfHtml5',
                className:'btn btn-danger',
                orientation: 'landscape',
                text:'DESCARGAR PDF',
                title:'Reporte de los registrados',
                filename: 'Maraton_2023'
            }
        ],
        'ajax':route.listadoR,
        order:[[3, 'desc'],[4, 'asc']],
        'columns':[
            {data:'number_doc'},
            {
                data:'name',
                render: function (item) {
                    return item.toUpperCase();
                }
            },
            {
                data:'lastname',
                render: function (item) {
                    return item.toUpperCase();
                }
            },
            {data:'nombre'},
            {data:'number'},
            {
                data:'region',
                render: function (item) {
                    return item.toUpperCase();
                }
            },
            {
                data:'provincia',
                render: function (item) {
                    return item.toUpperCase();
                }
            },
            {
                data:'distrito',
                render: function (item) {
                    return item.toUpperCase();
                }
            },
        ],
        rowGroup:{
            dataSrc: 'nombre',
        } 
    });
    table.buttons().container()
    .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
}