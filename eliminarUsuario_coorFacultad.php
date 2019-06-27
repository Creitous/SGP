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
    
    
    
 <!--------------------------ELIMINAR USUARIO------------------------------->
     <div class="contInDatos" id="eliminarUsuario">
        <div class="formInDatos2">
            <?php
                try{
                require_once ('conexion.php');
                $cedulaMia=$_SESSION['CEDULA'];
                $sql = "select * from USUARIO WHERE (TIPO_USUARIO!='Coordinador General') AND (CEDULA!= '$cedulaMia') ORDER BY APELLIDO";
                $result = $conn->query($sql);
                }
                 catch (Exception $e){
                     $error= $e->getMessage();
                }   
            ?>
            
            
            <table class="tablaEliminar">
                <tr class="tablaEliminarTR">
                    <th>&nbsp; CEDULA</th>
                    <th>&nbsp; NOMBRE&nbsp;</th>
                    <th>&nbsp; APELLIDO&nbsp;</th>
                    <th>&nbsp; FACULTAD&nbsp;</th>
                    <th>&nbsp; ESCUELA&nbsp;</th>
                    <th>&nbsp; TIPO USUARIO&nbsp;</th>
                    <th>&nbsp; ELIMINAR&nbsp;</th>
                </tr>
                
                
             <?php 
                while ($row = $result ->fetch_array()){
                    printf ("
                        <tr>
                            <td>&nbsp;%s</td>
                            <td>&nbsp;%s&nbsp;</td>
                            <td>&nbsp;%s&nbsp;</td>
                            <td>&nbsp;%s&nbsp;</td>
                            <td>&nbsp;%s&nbsp;</td>
                            <td>&nbsp;%s&nbsp;</td>
                            <td><a href=\"borrarUsuario_coorFacultad.php?cedula=%s\"><i class=\"fas fa-trash-alt\"> </i></a></td>
                        </tr>",$row["CEDULA"],$row["NOMBRE"],$row["APELLIDO"],
                            $row["FACULTAD"],$row["ESCUELA"],$row["TIPO_USUARIO"],$row["CEDULA"]
                            );

                } echo'</table>';

             ?>
                                    
            </table>
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