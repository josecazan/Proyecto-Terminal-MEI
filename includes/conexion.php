<?php
$host="localhost";
$usuario="root";
$contraseña="";
$base="sgtm";
$conexion= new mysqli($host, $usuario, $contraseña, $base);
	if ($conexion -> connect_errno){
		die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

?>