<!DOCTYPE html>
<html lang="es">
<head>
	<title>SGP -
            <?php
             session_start();     
            $tipoUsuario = $_SESSION['TIPO_USUARIO'];
            echo "$tipoUsuario";
            ?>
        </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<!-------------botsatrap---------------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="image/jpg" href="imagenes/icon.JPG" />
	<!-------------iconos de usuarios---------------->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	 <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

     <!-------------formulario inicio sesion---------------->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

</head>
<body>
<div class="marcoIndex">
		<div class="marcoIndex2">
                    
<!--------------------------ACCESO---------------------------------->
<div class="accesoSistema2">

	<label class="nombreMayusculas">
		    <?php
			session_start();
			$nombre = $_SESSION['NOMBRE'];
			$apellido = $_SESSION['APELLIDO'];
			$tipoUsuario = $_SESSION['TIPO_USUARIO'];
        $cedula=$_SESSION['CEDULA'];
			echo "Bienvenido | <strong> $nombre"." "."$apellido"." | "." $tipoUsuario"." </strong> |  ".$fecha=date("Y-m-d");
			?>
        </label>
</div>
<!-----------------------------Notificacion----------------------------->

<!-- fin notifiacion        -->
<div class="botonSalir">
	<!-----------------------------Notificacion----------------------------->
	<?php
            require_once('conexion.php');    
	?>  	
	<div class="demo-content">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>  -->

                <!-------------boton-menu---------------->
                    <div class="dropdown">
                         <!-------------boton-notificacion---------------->
                        <div id="notification-header">
                        <div style="position:relative">
                         <!-- <button id="notification-icon" name="button" onclick="myFunction()" class="dropbtn"><span id="notification-count"><?php if($count>0) { echo $count; } ?></span><img src="imagenes/notifi.png" /></button> -->
                          <div id="notification-latest"></div>
                        <!-------------fin-boton-notificacion---------------->
                    <!--  <button class="btn btn-primary dropdown-toggle" id="menu1" type="button"  data-toggle="dropdown">Configuracion
                      <span class="caret"></span></button> -->
                      <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" onclick="document.getElementById('ingresoSistema').style.display = 'block'" >Cambiar contrasena</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="usuarioRepresentanteEmpresa.php">Inicio</a></li>    
                      </ul>
                      <button  class="boton"><a href="cerrarSesion.php">Salir</a></button>
                    </div>

                  </div>

                
              </div>          
          
          </div>

          <?php if(isset($message)) { ?> <div class="error"><?php echo $message; ?></div> <?php } ?>
          <?php if(isset($success)) { ?> <div class="success"><?php echo $success;?></div> <?php } ?>
        
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    	
	<script type="text/javascript">
      	function myFunction() {
	        $.ajax({
	          url: "php/crearProyecto.php",
	          type: "POST",
	          processData:false,
	          success: function(data){
	            $("#notification-count").remove();                  
	            $("#notification-latest").show();$("#notification-latest").html(data);
	          },
	          error: function(){}           
	        });
      	}
                                 
      $(document).ready(function() {
        $('body').click(function(e){
          if ( e.target.id !== 'notification-icon'){
            $("#notification-latest").hide();
          }
        });
      });                                     
    </script>

<!----------------------------- fin notifiacion ------------------------------->	
</div>

<!--------------------------CABECERA---------------------------------->
		<div class="cabeceraIndex">
			<a href="usuarioRepresentanteEmpresa.php">SISTEMA GESTOR DE PROYECTOS (SGP)</a>
		</div><!--finde de la cabecera-->
                
<!--------------------------MENU---------------------------------->
        <div class="menuIndex">
                    <ul class="nav justify-content-center">
                        <button id="plantillaboton"><a id="plantillaboton" href="mostrarProyecto_repEmpresa.php">Mis Proyectos</a></button>
                    </ul>		
                </div>	

<!--------------------------CODIFICACION------------------------------------>		
<div class="codificacion"> 

</div>

<!--------------------------PIE------------------------------------>
			<div class="pie">
				<p>
                                    <!--<a href="https://www.espoch.edu.ec/"-->Escuela Superior Politecnica de Chimborazo</a>
                                </p>
				<p>Desarrollado por: <kbd>Alex Andino</kbd>|<kbd>Cristopher Garcia</kbd>|<kbd>Henry Moya</kbd>|<kbd>Raúl Medina</kbd>|<kbd>Paúl Proaño</kbd>|<kbd>Jessica Zavala</kbd> </p>
				
			</div>

	</div><!--finde del marcoIndex2-->
</div><!--finde del marcoIndex-->

<!-- ---------------- Recuperacion contrasena ------------------------------ -->
            <div id="ingresoSistema" class="w3-modal">
                <div class="w3-modal-content w3-animate-zoom">
                    <div class="contenedorInicioSesion">
                        <span onclick="document.getElementById('ingresoSistema').style.display = 'none'" class="w3-button w3-display-topright w3-large">x</span>
                        <center><h1>Cambiar contrasena</h1></center>
                    </div>

                    <form action="cambiarContra.php" target="_self" method="POST">
                        <br> 
                        <center><i class="fas fa-user"></i> <label>Nueva contrasena</label></center>
                        <center><input style="display: inline-block;"class="ingresoDatos" type="Password" placeholder=" " required name="contra1"></center>
                        <br>

                        <center> <i class="fa fa-link" aria-hidden="true"></i> <label>Repita contrasena</label></center>
                        <center><input style="display: inline-block;"class="ingresoDatos" type="Password" placeholder=" " required name="contra2"></center>
                        <br>

                        <center><button class="boton" type="submit">Enviar</button></center>
                    </form>
                </div>
            </div>
            <!---<div class="clear"></div>--->

<!--------------------------boostrap---------------------------------->

</body>
</html>

