<?php

	GenerarTicket($_POST['Asunto'], $_POST['Fecha'],$_POST['Nombre'],
                $_POST['Correo'],
                $_POST['Prioridad'], $_POST['Laboratorio'],
                $_POST['Descripcion'],$_POST['Estatus']);

	function GenerarTicket($Asunto, $Fecha ,$Nombre, $Correo, $Prioridad, $Laboratorio, $Descripcion, $Estatus ){
		include '../../includes/conexion.php';
		$sentencia="INSERT INTO
								tickets (asunto, fecha_creacion, nombre_solicitante, correo, id_prioridad, id_laboratorio, descripcion, id_estatus_ticket)
        				VALUES ('".$Asunto."', '".$Fecha."', '".$Nombre."', '".$Correo."','".$Prioridad."','".$Laboratorio."','".$Descripcion."','".$Estatus."')";

		$conexion->query($sentencia) or die ("Error al Generar Ticket: ".mysqli_error($conexion));

				echo '<script>';
				echo 'alert("Se ha generado su Solicitud se envió un correo con el seguimiento, favor de revisar bandeja de SPAM");';
				echo 'window.location.href="../NuevoTicket.php";';
				echo '</script>';

	}
?>
