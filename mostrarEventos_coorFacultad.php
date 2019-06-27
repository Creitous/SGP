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


 <!-------------------MIS EVENTOS---------------------------------->
        <div class="contInDatos" id="misEventos">
            <div class="formInDatos2">                                
                
                <?php
                    
                    $id_p= $_GET['id_p'];
                    
                    try{
                        require_once ('conexion.php');
                        $cedulaCF=$_SESSION['CEDULA'];
                        $sql = "SELECT * from EVENTO WHERE ID_P= '$id_p' ";
                        $result = $conn->query($sql);
                    }
                     catch (Exception $e){
                         $error= $e->getMessage();
                    }   
                ?>       
                
                <button class="boton"><a href="crearEvento_coorFacultad.php?id_pr=<?php echo $id_p ?>"> Nuevo Evento <i class="far fa-file"></i> </a></button>
                <button class="boton" onclick="subirDocumento()">Subir Documento</button>
                
                <table class="tablaEliminar">
                    <tr class="tablaEliminarTR">
                        <th>&nbsp; ID EVENTO &nbsp;</th>
                        <th>&nbsp; ID PROYECTO&nbsp;</th>
                        <th>&nbsp; COORDINADOR FACULTAD&nbsp;</th>
                        <th>&nbsp; COORDINADOR CARRERA ENCARGADO&nbsp;</th>
                        <th>&nbsp; NOMBRE EVENTO&nbsp;</th>
                        <th>&nbsp; DESCRIPCION&nbsp;</th>
                        <th>&nbsp; ESTADO EVENTO&nbsp;</th>
                        <th>&nbsp; FECHA INCIO&nbsp;</th>
                        <th>&nbsp; FECHA FIN&nbsp;</th>
                        <th>&nbsp; ACTIVIDADES&nbsp;</th> 
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
                                   <td>&nbsp;%s&nbsp;</td>  
                                   <td>&nbsp;%s&nbsp;</td>
                                   <td>&nbsp;%s&nbsp;</td>
                                   <td><center><a href=\"mostrarActividad_coorFacultad.php?id_e=%s\"> <i class=\"far fa-eye\"></i> </a></center></td>
                                   <td><a href=\"borrarEvento_coorFacultad.php?id_e=%s\">Eliminar</a></td>
                               </tr>",
                                   
                               $row["ID_E"],$row["ID_P"],$row["CEDULA_CF"],
                               $row["CEDULA_CC"],$row["NOMBRE_E"],$row["DESCRIPCION_E"],$row["ESTADO_E"],$row["FECHA_I_E"],$row["FECHA_F_E"],$row["ID_E"],$row["ID_E"]
                           );

                       } echo'</table>';
                    ?>
                                
                </table>
                     
            </div><!--formInDatos-->           
        </div><!--contInDatos-->              
                
<!-----------------------------------------SUBIR DOCUMENTO------------------------------------------->
                         <div class="contInDatos" id="subirDocumento">
                            <div class="formInDatos">

                                <form action="file_coorFacultad.php" method="post" enctype="multipart/form-data">
          
                                            <input class="boton" type="file" name="archivo" id="archivo"></input>
                                            <input class="boton" type="submit" value="Subir archivo"></input>
    
                                </form>
                            </div>  <!--finde del contenedor formInDatos--> 
                        </div><!---------fin de contenedor ingreso datos------------->

                    <script type="text/javascript">
                        document.getElementById('subirDocumento').style.display = "none";
                        
                        function subirDocumento() {
                            document.getElementById('subirDocumento').style.display = "block";
                            document.getElementById('misEventos').style.display = "none";
                        }
                    </script>                
                                                                                                                                                               
                
                
                
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