<?php

	NuevoMaterial($_POST['NombreMaterial'],$_POST['Existencias'] );

	function NuevoMaterial($NombreMaterial, $Existencias){
		include '../../includes/conexion.php';

		$sentencia="INSERT INTO
								Materiales (material, existencia)
        				VALUES ('".$NombreMaterial."','".$Existencias."')";

		$conexion->query($sentencia) or die ("Error al agregar material: ".mysqli_error($conexion));

				echo '<script>';
				echo 'alert("Material agregado exitosamente!!");';
				echo 'window.location.href="../admin_materiales.php";';
				echo '</script>';

	}
?>
