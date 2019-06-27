	<?php
		require_once('dbDatos.php');
		$count = 0;
		$conn= new mysqli($servidor, $usuario, $clave, $base);
		//******************notifiaciones*************
		$sql7 = "SELECT * FROM NOTIFICACION WHERE ESTADO = 0";
	    $result = mysqli_query($conn, $sql7);
	    $count = mysqli_num_rows($result);
		//****************fin-notifiaciones**********
		if ($conn ->connect_error) {
			
			echo $error=$conn -> connect_error;
			exit();
			}
	?>
