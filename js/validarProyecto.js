function validarFormNuevoProyecto(form)
{


    fail = validarNombreProyecto(form.nombreProyecto.value)
    fail += validarDescripcionProyecto(form.descripcionProyecto.value)
    fail += validarFechaInicioProyecto(form.fechaInicioProyecto.value)
    fail += validarFechaFinProyecto(form.fechaFinProyecto.value)
    fail += validarCoordinadorFacultadProyecto(form.coordinadorFacultadProyecto.value)
    fail += validarRepresentanteEmpresaProyecto(form.representanteEmpresaProyecto.value)

    if (fail == "")
        return true
    else {
        alert(fail);
        return false
    }
}

 function validarNombreProyecto(field)
{
    if (field == "")
        return "Ingrese el nombre del Proyecto.\n"
     else if (field.length < 10 )
        return "Debe describir de mejor manera el nombre de un proyecto.\n"
    return ""
}

 function validarDescripcionProyecto(field)
{
    if (field == "")
        return "Ingrese una descripción a este Proyecto.\n"
     else if (field.length < 20 )
        return "Debe describir de mejor manera el proyecto.\n"
    return ""
}

 function validarFechaInicioProyecto(field)
{
   
    if (field == "")
        return "Ingrese una fecha de inicio de Proyecto.\n"
     else if (field < '2019-01-01')
        return "Ingresamos proyectos solo de 2019.\n"
    return ""
}

 function validarFechaFinProyecto(field)
{
   
    if (field == "")
        return "Ingrese una fecha de fin de Proyecto.\n"
    return ""
}

 function validarCoordinadorFacultadProyecto(field)
{
   
    if (field == 'Seleccionar...')
        return "Ingrese un coordinador.\n"
    return ""
}

 function validarRepresentanteEmpresaProyecto(field)
{
   
    if (field == 'Seleccionar...')
        return "Ingrese un Representante de Empresa.\n"
    return ""
}