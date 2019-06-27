<?php

echo $nombreProyecto 		= $_POST['nombreProyecto'];
echo $descripcionProyecto 	= $_POST['descripcionProyecto'];
echo $estadoProyecto 		= $_POST['estadoProyecto'];
echo $fechaInicioProyecto 	= $_POST['fechaInicioProyecto'];
echo $fechaFinProyecto 		= $_POST['fechaFinProyecto'];
echo $coordinadorFacultadProyecto 	= $_POST['coordinadorFacultadProyecto'];
echo $representanteEmpresaProyecto	= $_POST['representanteEmpresaProyecto'];
echo $cedulaCoordinadorGeneral		=$_POST['cedulaCoordinadorGeneral'];
$count = 0;
$proc="le asigno un PROYECTO";
try{

	require_once('conexion.php');

		$sql= "INSERT INTO PROYECTO VALUES(
		'',
		'$cedulaCoordinadorGeneral',
		LEFT('$representanteEmpresaProyecto',10),
		LEFT('$coordinadorFacultadProyecto',10),
		'$nombreProyecto',
		'$descripcionProyecto',
		'$estadoProyecto',
		'$fechaInicioProyecto',
		'$fechaFinProyecto ')";
		$result= $conn->query($sql);    
		//*****************Notifiacion**************
		if(!empty($_POST['Enviar'])) {
			$sql2="INSERT INTO NOTIFICACION VALUES(
			'',
			'$proc',
			'',
			'$representanteEmpresaProyecto',
			'$fechaInicioProyecto')";	
			$result=$conn->query($sql2);

			$sql3="INSERT INTO NOTIFICACION VALUES(
			'',
			'$proc',
			'',
			'$coordinadorFacultadProyecto',
			'$fechaInicioProyecto')";	
			$result=$conn->query($sql3);
		}
		$sql4="SELECT * FROM NOTIFICACION WHERE ESTADO = 0";
		$result=$conn->query($sql4);
		$count= mysqli_num_rows($result);
                header( 'Location: ../' ) ;
		//****************fin-notificacion*****************
}
catch(exception $e){
		$error = $e->getMessage();
}

 header("Location: usuarioAdmin.php");  
?>