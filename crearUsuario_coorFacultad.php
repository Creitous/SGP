<!DOCTYPE html>
<html>
<head>
	<title>SGP -             
            <?php
            session_start();     
            $tipoUsuario = $_SESSION['TIPO_USUARIO'];
            echo "$tipoUsuario";
            ?>
        </title>
    
	<meta charset="utf-8">        
        <!-----------------Estilos CSS--------->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
        
        <!-------------script------------------>
        <script type="text/javascript" src="js/validar.js"></script>
        <script type="text/javascript" src="js/funForm.js"></script>
        
	<!-------------botsatrap--------------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="image/jpg" href="imagenes/icono.jpg" />
        
	<!-------------iconos de usuarios---------------->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<!--------------------------INICIO DE LOS DOS DIVS PRINCIPALES DE LA PAGINA------------------------------------>
<div class="marcoIndex">
    <div class="marcoIndex2">
                    
<!--------------------------ACCESO---------------------------------->
        <div class="accesoSistema2">
            <label class="nombreMayusculas">
                <?php		
                    $nombre = $_SESSION['NOMBRE'];
                    $apellido = $_SESSION['APELLIDO'];
                    $tipoUsuario = $_SESSION['TIPO_USUARIO'];
                    echo "Bienvenido | <strong> $nombre"." "."$apellido"." | "." $tipoUsuario"." </strong> |  ".$fecha=date("Y-m-d");
                ?>
        </div>

        <div class="botonSalir">
            <button  class="boton"><a href="cerrarSesion.php">Salir</a></button></label>
        </div>

<!--------------------------CABECERA---------------------------------->
        <div class="cabeceraIndex">
                <a href="usuarioCoordinadorFac.php">SISTEMA GESTOR DE PROYECTOS (SGP)</a>
        </div><!--finde de la cabecera-->

 <!--------------------------MENU---------------------------------->
                <div class="menuIndex">
                    <ul class="nav justify-content-center" style="height: 30px">
                    </ul>       
                </div>  

<!-------------------- INICIO DE CONTENEDOR CUERPO CREAR USUARIO - DENTRO DE ESTE DIV VAN TODOS LOS FORMULARIOS QUE EXISTAN EN ESTE USUARIO -------------------->
<div class="contenedorCuerpoCrearUsuario"> 
    
    
    
<!-------------------------- FORMULARIO DE CREAR USUARIO---------------------------------->
        <div class="contInDatos" id="formCrearUsuario_CF">
            <div class="formInDatos">
                <h1>CREAR USUARIO</h1>
                <br>
                <!--------------------------------------------------------------------------->
                <form action="registrarUsuario.php" method="POST" onsubmit=" return validarFormulario(this)">
                    <div class="datos1">

                        <label class="lblForm" id="tipoUsuario">Tipo de Usuario : </label>                                                                
                        <select class="ingresoDatos" id="escondertipoUsuario" name="tipoUsuario" size="1"  >
                            <option>Selecciona Tp.Usuario...</option>

                            <option id="corrdinadorFacultad" onclick="coorFacultad_1()">Coordinador Facultad</option>
                            <option id="coordinadorCarrera" onclick="coorCarrera_1()">Coordinador Carrera</option>
                            <option id="docente" onclick="docente_1()">Docente</option>
                            <option id="estudiante" onclick="estudiante_1()">Estudiante</option>
                            <option id="representanteEmpresa" onclick="repEmpresa_1()">Representante Empresa</option>
                        </select>                                
                        <br id="br1">
                        <br id="br2">

                        <label class="lblForm"id="nombre">Nombre : </label>
                        <input class="ingresoDatos" id="escondernombre" type="text" name="nombre" placeholder="Nombre...">
                        <br id="br3">
                        <br id="br4">

                        <label class="lblForm"id="apellido">Apellido : </label>
                        <input class="ingresoDatos" id="esconderapellido" type="text" name="apellido" placeholder="Apellido...">                                    	
                        <br id="br5">
                        <br id="br6">

                        <label class="lblForm"id="correo">Correo Electronico : </label>
                        <input class="ingresoDatos" id="escondercorreo" type="email" name="correo" placeholder="nombre@algo.com">
                        <br id="br7">
                        <br id="br8">

                        <label class="lblForm" id="telefono">Telefono : </label>
                        <input class="ingresoDatos" id="escondertelefono" type="text" name="telefono" placeholder="Telefono...">
                        <br id="br9">
                        <br id="br10">

                        <label class="lblForm"id="facultad">Facultad : </label>                                    
                        <select class="ingresoDatos" id="esconderfacultad" name="facultad" size="1"  >
                            <option>Selecciona Facultad...</option>
                            <option id="administracionEmpresas" onclick="adminEmpresas()">ADMINISTRACION DE EMPRESAS</option>
                            <option id="ciencias" onclick="cien()" >CIENCIAS</option>
                            <option id="informaticaElectronica" onclick="infElectronica()">INFORMATICA Y ELECTRONICA</option>
                            <option id="mecanica" onclick="mec()">MECANICA</option>
                            <option id="recursosNaturales"  onclick="recNaturales()" >RECURSOS NATURALES</option>
                            <option id="saludPublica" onclick="salPublica()">SALUD PÚBLICA</option>
                        </select>                                         
                        <br id="br11">                                 
                        <br id="br12">    

                        <label class="lblForm" id="escuela">Escuela :</label>
                        <select class="ingresoDatos" id="esconderescuela" name="escuela" size="1"  >
                                <option>Selecciona la Escuela...</option>
                                <option id="agronomia">AGRONOMIA</option>
                                <option id="administracionDeEmpresas">ADMINISTRACION DE EMPRESAS</option>
                                <option id="bioquimicaFarmacia">BIOQUIMICA Y FARMACIA</option>
                                <option id="contabilidadAuditoria">CONTABILIDAD Y AUDITORIA</option>
                                <option id="diseñoGrafico">DISEÑO GRAFICO</option>
                                <option id="finanzasComercioExterior">FINANZAS Y COMERCIO EXTERIOR</option>
                                <option id="ingenieriaAutomotriz">INGENIERIA AUTOMOTRIZ</option>
                                <option id="ingenieriaIndustrial">INGENIERIA INDUSTRIAL</option>
                                <option id="ingenieriaMecanica">INGENIERIA MECANICA</option>
                                <option id="ingenieriaMantenimiento">INGENIERIA DE MANTENIMIENTO</option>
                                <option id="marketing">MARKETING</option>
                                <option id="nutricionDietetica">NUTRICION Y DIETETICA</option>
                                <option id="software">SOFTWARE</option>
                        </select>                                                                             
                        <br id="br13"> 
                        <br id="br14">                                                                         

                        <label class="lblForm"id="cedula">Usuario (Cédula) : </label>
                        <input class="ingresoDatos" id="escondercedula" type="text" name="cedula" placeholder="Cédula...">
                        <br id="br15">
                        <br id="br16">

                        <label class="lblForm" id="contrasenia">Contraseña : </label>
                        <input class="ingresoDatos" id="escondercontrasenia" type="password" name="contrasenia" placeholder="Contraseña...">
                        <br id="br17">
                        <br id="br18">   

                        <center><input class ="boton"type="submit" name="Enviar" value="Crear Usuario"></center>
                        <center><input class ="boton"type="reset" value="Limpiar Informacion"></center>			
                    </div>
                </form>
                
            </div><!--formInDatos-->
        </div><!--contInDatos--> 
    
    
<!-------------------- FIN DEL DIV CONTENEDOR CUERPO CREAR USUARIO -------------------->
</div>

<!--------------------------PIE------------------------------------>
        <div class="pie">
                <p>Escuela Superior Politecnica de Chimborazo</p>
                <p>Desarrollado por: <kbd>Alex Andino</kbd>|<kbd>Cristopher Garcia</kbd>|<kbd>Henry Moya</kbd>|<kbd>Raúl Medina</kbd>|<kbd>Paúl Proaño</kbd>|<kbd>Jessica Zavala</kbd> </p>

        </div>


    </div> <!--marco index 2-->
</div><!--marco index-->



</body>
</html>    