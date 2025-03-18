<?php 
include("cn.php");


 ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./form_Contra.css">
    <title>Formulario de Contrataciones</title>
</head>
<body>

    <h2>Formulario De Contrataciones</h2>
    
    <form action="registrar8.php" method="post" class="form-register">
    <label for="tipo">Tipo de Contratación:</label>
        <select name="tipo" id="tipo" required>
            <option value="">Seleccione una opción</option>
            <option value="Temporal">Temporal</option>
            <option value="Indefinido">Indefinido</option>
            <option value="Obra o Labor">Obra o Labor</option>
        </select>
        <br>

        <label for="modalidad">Modalidad de Contratación:</label>
        <input type="text" id="modalidad" name="modalidad" required>
        <br>

        <label for="fecha_inicio">Fecha de Inicio:</label>
        <input type="date" id="fecha_inicio" name="fecha_inicio" required>
        <br>

        <label for="fecha_fin">Fecha de Finalización:</label>
        <input type="date" id="fecha_fin" name="fecha_fin" required>
        <br>

        <label for="duracion">Meses Contratados:</label>
        <input type="text" id="duracion" name="duracion" required>
        <br>

        <label for="valor_total">Valor Total del Contrato:</label>
        <input type="text" id="valor_total" name="valor_total" required>
        <br>

        <label for="valor_pago_mensual">Valor Pago Mensual:</label>
        <input type="text" id="valor_pago_mensual" name="valor_pago_mensual" required>
        <br>

        <label for="fecha_suscripcion">Fecha de Suscripción:</label>
        <input type="date" id="fecha_suscripcion" name="fecha_suscripcion" required>
        <br>

        <label for="fecha_cdp">Fecha CDP:</label>
        <input type="date" id="fecha_cdp" name="fecha_cdp" required>
        <br>

        <label for="cdp">CDP:</label>
        <input type="text" id="cdp" name="cdp" required>
        <br>

        <label for="fecha_rp">Fecha IP:</label>
        <input type="date" id="fecha_rp" name="fecha_rp" required>
        <br>

        <label for="unspc">UNSPC:</label>
        <input type="text" id="unspc" name="unspc" required>
        <br>

        <label>Empleado</label></br>
		<select name="empleado"> 
				<?php 
			$consulta="SELECT * FROM tabla_empleados";
			$ejecutar=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));

			 ?>
           <option value="">Seleccione una opción</option>
			<?php foreach ($ejecutar as $opciones): ?>
                

				<option value="<?php echo $opciones['id_empleado'] ?>"><?php echo $opciones['nombre'] ?></option>

			<?php endforeach ?>
		</select></br>

        <label>Objecto</label></br>
		<select name="objecto"> 
				<?php 
			$consulta="SELECT * FROM tabla_objecto_contrato";
			$ejecutar=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));

			 ?>
            <option value="">Seleccione una opción</option>
			<?php foreach ($ejecutar as $opciones): ?>

				<option value="<?php echo $opciones['id'] ?>"><?php echo $opciones['nombre'] ?></option>

			<?php endforeach ?>
		</select></br></br>

        <button type="submit">Enviar</button>
    </form>

</body>
</html>
