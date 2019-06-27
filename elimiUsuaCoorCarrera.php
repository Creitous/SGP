<?php

$cedula = $_GET['cedula'];

echo $cedula;

try {
    require_once 'conexion.php';
    $sql = "Delete from USUARIO where CEDULA = $cedula";
    $resultado = $conn->query($sql);
} catch (Exception $ex) {
    $error = $ex->getMessage();
}


 header('Location:registroUseCoorCarrera.php');





