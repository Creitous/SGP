<?php
$nombre		= $_POST['nombre'];
$apellido	= $_POST['apellido'];
$correo		= $_POST['correo'];
$facultad	= $_POST['facultad'];
$escuela	= $_POST['escuela'];
$tipoUsuario= $_POST['tipoUsuario'];
$cedula		= $_POST['cedula'];
$contrasenia= $_POST['contrasenia'];
$telefono= $_POST['telefono'];

	try{
		require_once('conexion.php');
		$sql= "INSERT INTO USUARIO VALUES(
		'$cedula','$correo','$contrasenia','$nombre','$apellido','$telefono','$facultad','$escuela', '$tipoUsuario')";

		$result= $conn->query($sql);      
	}
	catch(Exception $e){
		$error = $e->getMessage();
                
	}
        header("Location: index.php");     
?>

