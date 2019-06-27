<?php

require_once('conexion.php');
$upload_dir = 'subidas/';

if (isset($_POST['enviar'])) {
    
    $nombre = $_POST['nombre'];
    $tipoDocumento = $_POST['tipoDocumento'];
    $fecha = date('Y-m-d', time());
    $imgName = $_FILES['image']['name'];
    $imgTmp = $_FILES['image']['tmp_name'];
    $imgSize = $_FILES['image']['size'];
    
    if (empty($nombre)) {
        $errorMsg = 'Porfavor  la entrada de nombre';
    } elseif (empty($tipoDocumento)) {
        $errorMsg = 'Porfavor  la entrada de  tipoDocumento';
    } else {

        $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

        $allowExt = array('pdf');

        $userPic = time() . '_' . rand(1000, 9999) . '.' . $imgExt;

        if (in_array($imgExt, $allowExt)) {

            if ($imgSize < 5000000) {
                move_uploaded_file($imgTmp, $upload_dir . $userPic);
            } else {
                $errorMsg = 'Archivo demasiado grande';
            }
        } else {
            $errorMsg = 'Porfavor seleccione el documento';
        }
    }


    if (!isset($errorMsg)) {
        
        echo $nombre;
        
        echo $tipoDocumento;
        
        echo $fecha;
        
        $sql = "INSERT INTO  DOCUMENTO (NOMBRE_DOC, TIPO_DOC, URL_DOC, FECHA_SUB)
					values ('$nombre', '$tipoDocumento','$userPic','$fecha')";
       $result = $conn->query($sql);

        if ($result) {
             
            header('Location:SubirDocumento.php');
            
            $successMsg = 'Nuevo registro agregado exitosamente';
                     
        } else {
            $errorMsg = 'Error ' . mysqli_error($conn);
        }
    }
}


