<?php

$id = $_GET['id'];

try {
    require_once 'conexion.php';
    $sql = "Delete from ACTIVIDAD where ID_A = '$id'";
    $resultado = $conn->query($sql);
} catch (Exception $ex) {
    $error = $ex->getMessage();
}


header('Location:mostarActividad_coorCarrera.php');

?>

