<?php
include 'includes/conexion.php';
$mail = $conexion->real_escape_string($_POST['mail']);
$password = $conexion->real_escape_string($_POST['password']);
$consulta=ValidarUsuario($mail,$password);

function ValidarUsuario ($mail, $password){
	include 'includes/conexion.php';
	$sentencia="SELECT *
				FROM usuarios
				WHERE correo='".$mail."'
				AND password=BINARY'".$password."'";

	$resultado=$conexion->query($sentencia) or die ("Error al comprobar usuario: ".mysqli_error($conexion));
	$filas=$resultado->fetch_assoc();
	return [
				$filas['correo'],
				$filas['password'],
				$filas['id_tipo_de_usuario'],

		];
}
if($mail==$consulta[0] && $password==$consulta[1]){

	switch ($consulta[2]) {
		case 1:
			// code...
				$_SESSION['correo']=$consulta[0];
				$_SESSION['password']=$consulta[2];
				echo '<script>';
				echo 'window.location.href="dashboard";';
				echo '</script>';
			break;
			case 2:
				// code...
					$_SESSION['correo']=$consulta[0];
					$_SESSION['password']=$consulta[2];
					echo '<script>';
					echo 'window.location.href="dashboard/responsable.php";';
					echo '</script>';
				break;
				case 3:
					// code...
						$_SESSION['correo']=$consulta[0];
						$_SESSION['password']=$consulta[2];
						echo '<script>';
						echo 'window.location.href="dashboard/becario.php";';
						echo '</script>';
					break;
		default:

				echo '<script>';
				echo 'alert("Datos de acceso incorrectos");';
				echo 'window.location.href="index.php";';
				echo '</script>';
			break;
	}

}else {
	echo '<script>';
	echo 'alert("Datos de acceso incorrectos");';
	echo 'window.location.href="index.php";';
	echo '</script>';

}
?>
