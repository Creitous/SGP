﻿<!DOCTYPE html>
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
                <a href="usuarioProfesor.php">SISTEMA GESTOR DE PROYECTOS (SGP)</a>
        </div><!--finde de la cabecera-->

 <!--------------------------MENU---------------------------------->
                <div class="menuIndex">
                    <ul class="nav justify-content-center" style="height: 30px">
                    </ul>       
                </div> 
<!-------------------- INICIO DE CONTENEDOR CUERPO CREAR USUARIO - DENTRO DE ESTE DIV VAN TODOS LOS FORMULARIOS QUE EXISTAN EN ESTE USUARIO -------------------->
<div class="contenedorCuerpoCrearUsuario"> 


 <!-------------------MIS EVENTOS---------------------------------->
<div class="contInDatos" id="misEventos">
            <div class="formInDatos2">                                
                
                <?php
                    
                    $id_p= $_GET['id_p'];
                    
                    try{
                        require_once ('conexion.php');
                        $cedulaP=$_SESSION['CEDULA'];
                        $sql = "SELECT E.ID_E,E.ID_P,E.CEDULA_CF,E.CEDULA_CC,E.NOMBRE_E,E.DESCRIPCION_E,E.ESTADO_E,E.FECHA_I_E,E.FECHA_F_E
from EVENTO as E  INNER JOIN ACTIVIDAD ON E.ID_E = ACTIVIDAD.ID_E
WHERE ACTIVIDAD.CEDULA_D = '$cedulaP'";
                        $result = $conn->query($sql);
                    }
                     catch (Exception $e){
                         $error= $e->getMessage();
                    }   
                ?>       
                
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
                                   <td><center><a href=\"mostrarActividad_Profesor.php?id_e=%s\"> <i class=\"far fa-eye\"></i> </a></center></td>
                                   
                               </tr>",
                                   
                               $row["ID_E"],$row["ID_P"],$row["CEDULA_CF"],
                               $row["CEDULA_CC"],$row["NOMBRE_E"],$row["DESCRIPCION_E"],$row["ESTADO_E"],$row["FECHA_I_E"],$row["FECHAF_F_E"],$row["ID_E"],$id_p
                           );

                       } echo'</table>';
                    ?>
                                
                </table>
                     

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