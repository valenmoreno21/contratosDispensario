<?php
// Configurar las cabeceras para la descarga del archivo Excel
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=tabla_usuario.xls");

include("cn.php");

// Consulta SQL para obtener los datos de la tabla 'tabla_usuario'
$sql = "SELECT id, rol, id_empleado, usuario, contraseña FROM tabla_usuario";
$resultado = $conexion->query($sql);

// Verificar si hay datos
if ($resultado->num_rows > 0) {
    // Crear la tabla en formato HTML para Excel
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Rol</th><th>ID Empleado</th><th>Usuario</th><th>Contraseña</th></tr>";

    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$fila['id']}</td>";
        echo "<td>{$fila['rol']}</td>";
        echo "<td>{$fila['id_empleado']}</td>";
        echo "<td>{$fila['usuario']}</td>";
        echo "<td>{$fila['contraseña']}</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron registros.";
}

// Cerrar conexión
$conexion->close();
?>