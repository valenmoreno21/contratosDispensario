<?php 
include 'cn.php';
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

$insertar = "INSERT INTO tabla_objecto_contrato(nombre, descripcion) VALUES ('$nombre', '$descripcion')";

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado) {
	echo 'Error al registrar';
}
	else {
		echo 'usuario registrado exitosamente';
	}
	mysqli_close($conexion);
 ?>