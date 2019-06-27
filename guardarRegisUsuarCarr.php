<?php

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$Telefono =$_POST['telefono'];
$facultad = $_POST['facultad'];
$escuela = $_POST['escuela'];
$tipoUsuario = $_POST['tipoUsuario'];
$contrasenia = $_POST['contrasenia'];


try {
    require_once('conexion.php');
    $sql = "INSERT INTO USUARIO VALUES ('$cedula', '$correo' , '$contrasenia', '$nombre' ,'$apellido', '$Telefono' , '$facultad' , '$escuela' , '$tipoUsuario')";
    $resultado = $conn->query($sql);
} catch (Exception $ex) {
    $error = $ex->getMessage();
}

header('Location:registroUseCoorCarrera.php');

