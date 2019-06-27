<?php
$id = $_POST['id'];
$nombreActivida = $_POST['nombre'];
$cedulaD = $_POST['docente'];
$cedulaE = $_POST['estudiante'];
$evento = $_POST['evento'];
$estado = $_POST['estado'];
$fechaInicio = $_POST['fechaInicio'];
$fechaFinal =$_POST['fechaFinal'];
$descripcion = $_POST['descripcion'];
echo $evento;
 
try {
    require_once('conexion.php');
    $sql = "UPDATE ACTIVIDAD SET ID_E = $evento, CEDULA_D ='$cedulaD', CEDULA_E = '$cedulaE' , NOMBRE_A = '$nombreActivida' , DESCRIPCION_A = '$descripcion', ESTADO_A = '$estado' ,FECHA_I_A = '$fechaInicio' , FECHA_F_A ='$fechaFinal'  WHERE ID_A = $id ";
    $resultado = $conn->query($sql);
} catch (Exception $ex) {
    $error = $ex->getMessage();
}

header('Location:mostarActividad_coorCarrera.php');


