<?php
$nombreActivida = $_POST['nombre'];
$cedulaCC = $_POST['cedula'];
$cedulaD = $_POST['docente'];
$cedulaE = $_POST['estudiante'];
$evento = $_POST['evento'];
$estado = $_POST['estado'];
$fechaInicio = $_POST['fechaInicio'];
$fechaFinal =$_POST['fechaFinal'];
$descripcion = $_POST['descripcion'];

try {
    require_once('conexion.php');
    $sql = "INSERT INTO ACTIVIDAD (ID_E ,CEDULA_CC ,CEDULA_D , CEDULA_E, NOMBRE_A, DESCRIPCION_A,ESTADO_A ,FECHA_I_A,FECHA_F_A) VALUES ( '$evento ' , '$cedulaCC','$cedulaD','$cedulaE' ,'$nombreActivida' ,'$descripcion', '$estado' , '$fechaInicio' , '$fechaFinal')";
    $resultado = $conn->query($sql);
} catch (Exception $ex) {
    $error = $ex->getMessage();
}

header('Location:mostarEvento_coorCarrera.php');


