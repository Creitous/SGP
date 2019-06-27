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
        <script type="text/javascript" src="js/validarCedula.js"></script>
        
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
 <!-------------------------- BUSCAR USUARIO POR CEDULA PARA MODIFICARLO---------------------------------->     
        <div class="contInDatos" id="buscarUsuario">
            <div class="formInDatos">
                
                <h1>BUSCAR USUARIO</h1>
                <br>

                <form action="modificarUsuario_coorFacultad.php" method="POST" onsubmit=" return validarFormCedula(this)">
                    <div class="datos1">
                        <label class="lblForm"id="cedulaBuscar">Cédula : </label>
                        <input class="ingresoDatos"type="text" name="enviarConsultarCedula" placeholder="Cédula a Buscar...">
                        <input type="submit" value="Buscar" class="boton" href="modificarUsuario_coorFacultad.php" >

                    </div>
                </form>
                
            </div>  <!--finde del contenedor formInDatos-->
        </div><!---------fin de contenedor ingreso datos-------------> 
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