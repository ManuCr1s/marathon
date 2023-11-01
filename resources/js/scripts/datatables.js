import 'datatables.net-dt/css/jquery.dataTables.css';
import 'datatables.net'; 
import 'datatables.net-rowgroup-dt';
import route from './route';
import {data} from '../functions/functions_date';
export function tables(indentifyTable){
    let nameTable = $(indentifyTable);
    let table = nameTable.DataTable({
        'ajax':route.listadoI,
        order:[[3, 'desc']],
        'columns':[
            {data:'number_doc'},
            {data:'name'},
            {data:'lastname'},
            {data:'nombre'},
            {data:'number_ins'},
            {
                render: function(data, type, row) {
                    return '<div class="row"><input type="text" id="'+row.number_doc+'" class="form-control col-md-2"/><button class="editar btn btn-primary col-md-3">Registrar</button>';
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
