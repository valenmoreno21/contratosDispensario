<?php 
include 'cn.php';
$n_registro = $_POST["n_registro"];
$n_proceso = $_POST["n_proceso"];
$nombre = $_POST["nombre"];
$unidad = $_POST["unidad"];
$n_cedula = $_POST["n_cedula"];
$fecha_expedicion_documento = $_POST["fecha_expedicion_documento"];
$lugar_expedicion_documento = $_POST["lugar_expedicion_documento"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$cod_verificacion_rut = $_POST["cod_verificacion_rut"];
$area_desempenada = $_POST["area_desempenada"];

$insertar = "INSERT INTO tabla_empleados(n_registro, n_proceso, nombre, unidad, n_cedula, fecha_expedicion_documento, lugar_expedicion_documento, fecha_nacimiento, direccion, telefono, cod_verificacion_rut, Area_desempenada) 
VALUES ('$n_registro', '$n_proceso', '$nombre', '$unidad', '$n_cedula', '$fecha_expedicion_documento', '$lugar_expedicion_documento', '$fecha_nacimiento', '$direccion', '$telefono', '$cod_verificacion_rut', '$area_desempenada')";

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado) {
	echo 'Error al registrar';
}
	else {
		echo 'usuario registrado exitosamente';
	}
	mysqli_close($conexion);
 ?>