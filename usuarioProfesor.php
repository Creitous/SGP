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
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
        <!-------------script------------------>
        <script type="text/javascript" src="js/validar.js"></script>
        <script type="text/javascript" src="js/funForm.js"></script>
	<!-------------botsatrap---------------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="image/jpg" href="imagenes/icono.jpg" />
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
            <ul class="nav justify-content-center">
		<button id="plantillaboton"><a id="plantillaboton" href="mostrarProyectos_profesor.php">Mis Proyectos</a></button>
            </ul>		
        </div>	

<!--------------------------CODIFICACION------------------------------------>		
<div class="codificacion">

</div>


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

