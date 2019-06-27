<?php

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$Telefono = $_POST['telefono'];
$facultad = $_POST['facultad'];
$escuela = $_POST['escuela'];
$tipoUsuario = $_POST['tipoUsuario'];
$contrasenia = $_POST['contrasenia'];

try {

    require_once ('conexion.php');
    $sql = "Update USUARIO  set NOMBRE = '$nombre',APELLIDO ='$apellido', CORREO ='$correo' ,TELEFONO = '$Telefono', FACULTAD = '$facultad' ,ESCUELA = '$escuela', TIPO_USUARIO = '$tipoUsuario', CONTRASENIA = '$contrasenia'"
            . "where CEDULA = '$cedula'";
    $resultado = $conn->query($sql);
    
} catch (Exception $ex) {

    $error = $ex->getMessage();
}


header("Location:registroUseCoorCarrera.php"); // para llamr al formulario principal
