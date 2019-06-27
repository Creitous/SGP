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


<!-------------------- INICIO DE CONTENEDOR CUERPO CREAR USUARIO - DENTRO DE ESTE DIV VAN TODOS LOS FORMULARIOS QUE EXISTAN EN ESTE USUARIO -------------------->
<div class="contenedorCuerpoCrearUsuario"> 
    
    
    
 <!-----------------------------FORMULARIO CREAR EVENTO---------------------------------------->		
        <div class="contInDatos" id="formCrearEvento">
            <div class="formInDatos">
                <h1>CREAR EVENTO</h1>
                <br>
                                
                <form action="crearEventoFinal_coorFacultad.php" method="POST">
                    <div class="datos1">
                        <label class="lblForm">Nombre Evento: </label><br>
                        <input type="text" class="ingresoDatos" name="nombreEvento"> 
                        <br>
                        <br>

                        <label class="lblForm">Descripcion: </label><br>
                        <textarea name="descripcionEvento" class="ingresoDatos" ></textarea>       
                        <br>
                        <br>

                        <label class="lblForm">Fecha Inicio:</label> 
                        <input type="date" name="fechaInicio"> 
                        <br>
                        <br>

                        <label class="lblForm">Fecha Fin: </label> 
                        <input type="date" name="fechaFin">
                        <br>
                        <br>

                        <!--aqui hacemos un pequeno bloque php para llamar a la base y traer a todos los coord de carrera a nuestro select-->
                        <?php
                        require_once('conexion.php');
                        $sql="SELECT CEDULA, NOMBRE, APELLIDO FROM USUARIO WHERE TIPO_USUARIO='Coordinador Carrera'";
                        $result2=$conn->query($sql);
                        ?>

                        <label class="">Asignar Coordinador de Carrera: </label><br>
                        <select name="seleccionCoorCarrera" class="ingresoDatos">
                            <option focus>Seleccionar...</option>
                            <?php
                            while($datos=$result2->fetch_array()){
                                $dc=$datos['CEDULA'];
                                $dn=$datos['NOMBRE'];
                                $da=$datos['APELLIDO'];
                            echo "<option>$dc - $dn $da</option>";    
                            }
                            ?>                               
                        </select>
                        <br>
                        <br>
                        <!--fin de llamada a la base-->

                        <center>
                            <input class="boton" type="submit" value="Crear Evento">  
                            <br>
                            <input class="boton" type="reset" value="Limpiar Informacion">                        
                        </center>

                        
                        <?php
                           $id_p=$_GET['id_pr'] ;
                        ?>
                        
                        <input type="hidden" name="id_proyecto" value="<?php echo $id_p; ?>" >
                        <input type="hidden" name="cedulaCoorFacultad" value="<?php echo $_SESSION['CEDULA']; ?>" >
                        <input type="hidden" name="estadoIni" value="Iniciado">

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