function validarFormCedula(form)
{


    fail = validarCedula(form.enviarConsultarCedula.value)


    if (fail == "")
        return true
    else {
        alert(fail);
        return false
    }
}




function validarCedula(field) {
   
    var digitoVerificador = field[9];
    var suma =0;
    var multi = 0;

    if (isNaN(field)){
        return "Ingrese una Cédula.\n"
    }else{
        
        for ( var i = 0 ; i < (field.length) - 1 ; i++){
            
           if( i % 2 == 0){
               
               multi =field[i]*2;
           }else{
               multi = field[i]*1;
           } 
            
            if(multi >= 10){
                
               multi = multi-9;
               
            }
         suma = suma + multi   
        }
       
       
        var rango = (Math.trunc(suma/10)+1)*10
                  
        if((rango - suma) == digitoVerificador){
                return ""
        }else{
            return "Ingrese una Cédula\n"
        }
        
      
    }

 }

function validarFormProyecto(form)
{
   fail = validarNumProyecto(form.enviarConsultarProyecto.value)
    if (fail == "")
        return true
    else {
        alert(fail);
        return false
    }
}

 function validarNumProyecto(field)
{
    if (field == "")
        return "Ingrese un Proyecto.\n"
    else if (/[a-z]/.test(field) || /[A-Z]/.test(field))
        return "El proyecto no debe tener letras.\n"
     else if (field >= 100 )
        return "Un proyecto no debe puede ser mayor o igual 100.\n"
    return ""
}