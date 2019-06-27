<?php

		require_once('conexion.php');
		$sql = "UPDATE NOTIFICACION SET ESTADO = 1 WHERE ESTADO = 0";	
		$result = $conn->query($sql);
		$sql = "SELECT * FROM NOTIFICACION ORDER BY ID DESC limit 5";
		$result = $conn->query($sql);
		$response='';
		while($row=mysqli_fetch_array($result)) {
			/* Formate fecha */
			$fechaOriginal = $row["FECHA"];
			$fechaFormateada = date("d-m-Y", strtotime($fechaOriginal));
			$response = $response . "<div class='notification-item'>" .
			"<div class='notification-subject'>". $row["AUTOR"] . " - <span>". $fechaFormateada . "</span> </div>" . 
			"<div class='notification-comment'>" . $row["MENSAJE"]  . "</div>" .
			"</div>";
		}
		if(!empty($response)) {
			print $response;
		}
?>