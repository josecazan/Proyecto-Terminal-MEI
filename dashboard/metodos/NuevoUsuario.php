<?php

	NuevoUsuario($_POST['Nombres'], $_POST['Apellidos'], $_POST['Email'], $_POST['Password'], $_POST['Id_tipo_de_usuario'], $_POST['Id_estatus_usuario']);

	function NuevoUsuario($Nombres, $Apellidos, $Email, $Password, $Id_tipo_de_usuario, $Id_estatus_usuario){
		include '../../includes/conexion.php';

    $Fechareg = date("d/m/Y");
		$sentencia="INSERT INTO
								usuarios (nombre, apellido, correo, password, fecha_reg, id_tipo_de_usuario, Id_estatus_usuario)
        				VALUES ('".$Nombres."', '".$Apellidos."', '".$Email."', '".$Password."','".$Fechareg."','".$Id_tipo_de_usuario."','".$Id_estatus_usuario."')";

		$conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));

				echo '<script>';
				echo 'alert("Usuario creado exitosamente!!");';
				echo 'window.location.href="../admin_usuarios.php";';
				echo '</script>';

	}
?>
