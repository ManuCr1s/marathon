export function inputNull(input) {return (input.val().length > 0);}
export function valueInput(input) {return (input.val() == 0);}
export function onlyNumbers(code){
    let variable = code.charCode;
    return variable >= 48 && variable <= 57;
}