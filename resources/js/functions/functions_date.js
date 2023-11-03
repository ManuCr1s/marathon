export function inputNull(input) {return (input.val().length > 0);}
export function valueInput(input) {return (input.val() == 0);}
export function ubicacionInput(input) {return (input.val() == 9999);}
export function levelInput(input){return(input.val() == 10)}
export function onlyNumbers(code){
    let variable = code.charCode;
    return variable >= 48 && variable <= 57;
}
export function data(nameTable,table,url){
    $(nameTable).on("click","button.editar",function(){
        let data = table.row($(this).parents('tr')).data();
        let user = $('#user').attr('value');
        let input = $('#'+data.number_doc),datos;
        swal({
            title: "¿Esta seguro de registrar numero de corredor?",
            text: "Esta asignando el numero "+input.val()+" al dni "+data.number_doc,
            icon: "warning",
            buttons: true,
            dangerMode: true,
          }).then((willDelete) => {
            if (willDelete) {
                datos = {
                    'numero':input.val(),
                    'dni':data.number_doc,
                    'user':user
                };
                $.ajax({
                    headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
                    type:'POST',
                    url:url,
                    data:datos,
                    success:function(data){
                        let myData = $.parseJSON(data);
                        if(myData.status){
                            swal({
                                title: "Felicitaciones",
                                text: myData.message,
                                icon: "success",
                              }).then(()=>{
                                window.location.reload(); 
                            })
                        }else{
                            swal({
                                title: "Upps hubo un problema",
                                text: myData.message,
                                icon: "warning",
                              })
                        }
                    }
                });
            } 
          });
        data.number_doc;
    });
} 
export function edades(nac){
    let anios =new Date(nac),
    now = new Date(),
    year,
    month,
    days,
    edad;
    year = now.getUTCFullYear() - anios.getUTCFullYear();
    month = now.getUTCMonth() - anios.getUTCMonth();
    days= now.getUTCDate() - anios.getUTCDate();
    if(days < 0){
        month--;
        days = 30 + days;
    }
    if(month < 0){
        year--;
        month = 12 + month;     
    }
    edad = year+' años/'+ month+' meses/'+days+' dias';
    return {'edad':edad,'year':year,'month':month,'days':days};
}