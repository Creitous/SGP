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
                <a href="usuarioAdmin.php">SISTEMA GESTOR DE PROYECTOS (SGP)</a>
        </div><!--finde de la cabecera-->

 <!--------------------------MENU---------------------------------->
                <div class="menuIndex">
                    <ul class="nav justify-content-center" style="height: 30px">
                    </ul>       
                </div>  

<!-------------------- INICIO DE CONTENEDOR CUERPO CREAR USUARIO - DENTRO DE ESTE DIV VAN TODOS LOS FORMULARIOS QUE EXISTAN EN ESTE USUARIO -------------------->
<div class="contenedorCuerpoCrearUsuario"> 


 <!-------------------MIS ACTIVIDADES---------------------------------->
<div class="contInDatos" id="misActividades">
            <div class="formInDatos2">                                
                
                <?php
                    
                    $id_e= $_GET['id_e'];
                    
                    try{
                        require_once ('conexion.php');
                        $sql = "SELECT * from ACTIVIDAD WHERE ID_E= '$id_e' ";
                        $result = $conn->query($sql);
                    }
                     catch (Exception $e){
                         $error= $e->getMessage();
                    }   
                ?>       
                
                
                <table class="tablaEliminar">
                    <tr class="tablaEliminarTR">
                        <th>&nbsp; ID ACTIVIDAD &nbsp;</th>
                        <th>&nbsp; ID EVENTO&nbsp;</th>
                        <th>&nbsp; COORDINADOR CARRERA ENCARGADO&nbsp;</th>
                        <th>&nbsp; DOCENTE&nbsp;</th>
                        <th>&nbsp; ESTUDIANTE&nbsp;</th>
                        <th>&nbsp; NOMBRE ACTIVIDAD&nbsp;</th>
                        <th>&nbsp; DESCRIPCION&nbsp;</th>
                        <th>&nbsp; ESTADO&nbsp;</th>
                        <th>&nbsp; FECHA INICIO&nbsp;</th>
                        <th>&nbsp; FECHA FIN&nbsp;</th> 

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
                                   <td>&nbsp;%s&nbsp;</td>
                               </tr>",
                                   
                               $row["ID_A"],$row["ID_E"],$row["CEDULA_CC"],
                               $row["CEDULA_D"],$row["CEDULA_E"],$row["NOMBRE_A"],$row["DESCRIPCION_A"],$row["ESTADO_A"],$row["FECHA_I_A"],$row["FECHA_F_A"]
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