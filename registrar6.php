<?php 
include 'cn.php';
$id = intval($_POST["usuario"]);
$id_empleado = intval($_POST["empleado"]);

$insertar = "INSERT INTO tabla_supervisor(id_usuario_supervisor, id_empleado) VALUES ('$id', '$id_empleado')";

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado) {
	echo 'Error al registrar';
}
	else {
		echo 'usuario registrado exitosamente';
	}
	mysqli_close($conexion);
 ?>