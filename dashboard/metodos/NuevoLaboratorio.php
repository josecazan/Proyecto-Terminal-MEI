<?php

	NuevoLaboratorio($_POST['NombreLaboratorio'] );

	function NuevoLaboratorio($NombreLaboratorio){
		include '../../includes/conexion.php';

    $Fechareg = date("d/m/Y");
		$sentencia="INSERT INTO
								Laboratorios (laboratorio, fecha_reg)
        				VALUES ('".$NombreLaboratorio."','".$Fechareg."')";

		$conexion->query($sentencia) or die ("Error al agregar laboratorio: ".mysqli_error($conexion));

				echo '<script>';
				echo 'alert("Laboratorio agregado exitosamente!!");';
				echo 'window.location.href="../admin_laboratorios.php";';
				echo '</script>';

	}
?>
