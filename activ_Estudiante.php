<!DOCTYPE html>
 <?php
    session_start(); 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            <?php    
                $tipoUsuario = $_SESSION['TIPO_USUARIO'];
            echo "$tipoUsuario";
            ?>
        </title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <!-------------script---------------->
        <script type="text/javascript" src="js/validar.js"></script>
        <script type="text/javascript" src="js/funForm.js"></script>
        <!-------------botsatrap---------------->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" type="image/jpg" href="imagenes/icon.JPG" />
        <!-------------iconos de usuarios---------------->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="marcoIndex">
		<div class="marcoIndex2">
                    
<!--------------------------ACCESO---------------------------------->
<div class="accesoSistema2">

	<label class="nombreMayusculas">
		    <?php
			$nombre = $_SESSION['NOMBRE'];
			$apellido = $_SESSION['APELLIDO'];
			$tipoUsuario = $_SESSION['TIPO_USUARIO'];
                        $cedula = $_SESSION['CEDULA'];
			echo "Bienvenido | <strong> $nombre"." "."$apellido"." | "." $tipoUsuario"." </strong> |  ".$fecha=date("Y-m-d");
			?>
</div>
<div class="botonSalir">
	<button  class="boton"><a href="cerrarSesion.php">Salir</a></button></label>
</div>

<!--------------------------CABECERA---------------------------------->
		<div class="cabeceraIndex">
			<a href="usuarioEstudiante.php">SISTEMA GESTOR DE PROYECTOS (SGP)</a>
		</div><!--finde de la cabecera-->

 <!--------------------------MENU---------------------------------->
                <div class="menuIndex">
                    <ul class="nav justify-content-center" style="height: 30px">
                    </ul>       
                </div>  
                
<!--------------------------CODIFICACION------------------------------------>		
<div class="contInDatos" id="misActividades">
            <div class="formInDatos2">
                <center><h1>Mis Actividades</h1></center>
                <?php
                    try{
                        require_once ('conexion.php');
                        $cedulaE=$_SESSION['CEDULA'];
                        $sql = "SELECT * from ACTIVIDAD inner join USUARIO on ACTIVIDAD.CEDULA_D=USUARIO.CEDULA where ACTIVIDAD.CEDULA_E='$cedulaE'";
                        $result = $conn->query($sql);
                        $sql1 = "SELECT * from ACTIVIDAD inner join USUARIO on ACTIVIDAD.CEDULA_CC=USUARIO.CEDULA where ACTIVIDAD.CEDULA_E='$cedulaE'";
                        $result1 = $conn->query($sql1);
                    }
                     catch (Exception $e){
                         $error= $e->getMessage();
                    }   
                ?>       
                
                <table class="tablaEliminar">
                    <tr class="tablaEliminarTR">
                        <th>&nbsp; ID ACTIVIDAD  &nbsp;</th>
                        <th>&nbsp; ID EVENTO &nbsp;</th>
                        <th>&nbsp; CORDINADOR DE CARRERA &nbsp;</th>
                        <th>&nbsp; DOCENTE &nbsp;</th>
                        <th>&nbsp; NOMBRE DE LA ACTIVIDAD&nbsp;</th>
                        <th>&nbsp; ESTADO&nbsp;</th>
                        <th>&nbsp; FECHA DE INICIO &nbsp;</th>
                        <th>&nbsp; FECHA DE FINALIZACION&nbsp;</th>
                    </tr>
                    
                    <?php 
                       while ($row = $result ->fetch_array() and $row1 = $result1 ->fetch_array()){
                           printf ("
                               <tr>
                                   <td>&nbsp;%s</td>
                                   <td>&nbsp;%s&nbsp;</td>
                                   <td>&nbsp;(%s)-%s %s&nbsp;</td>
                                   <td>&nbsp;(%s)-%s %s&nbsp;</td>
                                   <td>&nbsp;%s&nbsp;</td>
                                   <td>&nbsp;%s&nbsp;</td>
                                   <td>&nbsp;%s&nbsp;</td>
                                   <td>&nbsp;%s&nbsp;</td>  
                               </tr>",
                               $row["ID_A"],$row["ID_E"],$row1["CEDULA_CC"],$row1["NOMBRE"],$row1["APELLIDO"],$row["CEDULA_D"],
                               $row["NOMBRE"],$row["APELLIDO"],$row["NOMBRE_A"],$row["ESTADO_A"],$row["FECHA_I_A"],$row["FECHA_F_A"]
                           );

                       } echo'</table>';
                    ?>
            </div><!--formInDatos-->           
        </div><!--contInDatos-->  


<!--------------------------PIE------------------------------------>
			<div class="pie">
				<p>Escuela Superior Politecnica de Chimborazo</p>
				<p>Desarrollado por: <kbd>Alex Andino</kbd>|<kbd>Cristopher Garcia</kbd>|<kbd>Henry Moya</kbd>|<kbd>Raúl Medina</kbd>|<kbd>Paúl Proaño</kbd>|<kbd>Jessica Zavala</kbd> </p>
				
			</div>

	</div><!--finde del marcoIndex2-->
</div><!--finde del marcoIndex-->

<!--------------------------boostrap---------------------------------->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
