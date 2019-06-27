function validarFormulario(form)
{
    /*fail += validateAge(form.age.value)*/

    fail = validarNombre(form.nombre.value)
    fail += validarApellido(form.apellido.value)
    fail += validarCorreo(form.correo.value)
    fail += validarTelefono(form.telefono.value)
    fail += validarFacultad(form.facultad.value)
    fail += validarEscuela(form.escuela.value)
    fail += validarCedula(form.cedula.value)
    fail += validarContrasenia(form.contrasenia.value)

    if (fail == "")
        return true
    else {
        alert(fail);
        return false
    }
}


function validarNombre(field)
{
    if (field == "")
        return "Ingrese un nombre.\n"
    else if (field.length < 2)
        return "Nombre no válido.\n"
    else if (/[0-9]/.test(field))
        return "Un nombre no debe contener numeros.\n"
    return ""
}
function validarApellido(field)
{
    if (field == "")
        return "Ingrese un apellido.\n"
    else if (field.length < 4)
        return "Apellido no valido.\n"
    else if (/[0-9]/.test(field))
        return "Un apellido no debe contener numeros.\n"
    return ""
}

function validarCorreo(field)
{
    if (field == "")
        return "Correo electronico no encontrado.\n"
    else if (!((field.indexOf(".") > 0) && (field.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(field))
        return "Correo electronico no valido..\n"
    return ""
}
 function validarFacultad(field)
{
   
    if (field == 'Selecciona Facultad...')
        return "Ingrese una facultad.\n"
    return ""
}

 function validarEscuela(field)
{
   
    if (field == 'Selecciona la escuela...')
        return "Ingrese una escuela.\n"
    return ""
}
function validarTelefono(field)
{
    if (field == "")
        return "Telefono no encontrado.\n"
    else if (/[a-z]/.test(field) || /[A-Z]/.test(field))
        return "El telefono no debe tener letras.\n"
     else if (field.length < 10)
        return "Un telefono debe tener 10 numeros.\n"
    return ""
}
function validarCedula(field) {
   
    var digitoVerificador = field[9];
    var suma =0;
    var multi = 0;

    if (isNaN(field)){
        return "Ingrese un cedula.\n"
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
            return "Cedula incorrecta\n"
        }
        
      
    }

 }
function validarContrasenia(field)
{
    if (field == "")
        return "Contraseña no ingresada.\n"
    else if (field.length < 6)
        return "La contraseña debe tener almenos 6 caracteres.\n"
    else if (!/[a-z]/.test(field) || !/[A-Z]/.test(field) || !/[0-9]/.test(field))
        return "La contraseña debe contener a-z, A-Z y 0-9.\n"
    return ""
}

 /*
function validarDescripcion(field)
{
    if (field == "")
        return "Ingrese una descripcion de su contrasenia para ayudas en lo posterior.\n"
    else if (field.length < 10)
        return "La descripcion debe contener almenos 10 caracteres.\n"
    else if (/[0-9]/.test(field))
        return "La descripcion debe contener palabras unicamente.\n"
    return ""
}

 function validarUsuario(field)
 {
 if (field == "") return "Usuario no ingresado.\n"
 else if (field.length < 5)
 return "El usuario debe tener almenos 5 caranteres.\n"
 else if (/[^a-zA-Z0-9_-]/.test(field))
 return "Only a-z, A-Z, 0-9, - and _ allowed in Usernames.\n"
 return ""
 }
 
 */

/*
 function validateAge(field)
 {
 if (isNaN(field)) return "No Age was entered.\n"
 else if (field < 99999999 || field > 9999999999)
 return "Age must be between 18 and 110.\n"
 return ""
 }*/