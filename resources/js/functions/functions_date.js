export function inputNull(input) {return (input.val().length > 0);}
export function valueInput(input) {return (input.val() == 0);}
export function ubicacionInput(input) {return (input.val() == 9999);}
export function levelInput(input){return(input.val() == 10)}
export function onlyNumbers(code){
    let variable = code.charCode;
    return variable >= 48 && variable <= 57;
}
/*
export function calcular(id){
    let input = $('#'+id),datos;
    swal({
        title: "¿Esta seguro de registrar numero de corredor?",
        text: "Una vez registrada lel numero ya no se podra modificar",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            datos = {
                'numero':input.val(),
                'dni':id
            };
            $.ajax({
                type:'POST',
                url:routeChange('time'),
                data:datos,
                success:function(data){
                    
                }
            });
        } 
      });
}*/
export function data(nameTable,table){
    $(nameTable).on("click","button.editar",function(){
        let data = table.row($(this).parents('tr')).data();
        let input = $('#'+data.number_doc),datos;
        swal({
            title: "¿Esta seguro de registrar numero de corredor?",
            text: "Esta asignando el numero "+input.val()+" al dni "+data.number_doc,
            icon: "warning",
            buttons: true,
            dangerMode: true,
          });
          /*
          .then((willDelete) => {
            if (willDelete) {
                datos = {
                    'numero':input.val(),
                    'dni':data.number_doc
                };
                $.ajax({
                    type:'POST',
                    url:,
                    data:datos,
                    success:function(data){
                        
                    }
                });
            } 
          });
        data.number_doc;*/
    });
} 