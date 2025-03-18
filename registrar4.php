<?php 
include 'cn.php';
$n_cuenta = $_POST["n_cuenta"];
$tipo_cuenta = $_POST["tipo_cuenta"];
$entidad_bancaria = $_POST["entidad_bancaria"];
$rublo_presupuestal = $_POST["rublo_presupuestal"];
$id_empleado = intval($_POST["empleado"]);

$insertar = "INSERT INTO tabla_cuenta_bancaria(n_cuenta, tipo_cuenta, entidad_bancaria, rublo_presupuestal, id_empleado) VALUES ('$n_cuenta', '$tipo_cuenta', '$entidad_bancaria', '$rublo_presupuestal', '$id_empleado')";

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado) {
	echo 'Error al registrar';
}
	else {
		echo 'usuario registrado exitosamente';
	}
	mysqli_close($conexion);
 ?>