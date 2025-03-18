<?php 
include("cn.php");


 ?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario regisro de poliza</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

<form action="registrar5.php" method="post" class="form-register">
		<h2 class="form__titulo"> Formulario para registros de poliza </h2>
		<div class="contenedor-inputs"> 
			<label for= "n_poliza_cumplimiento">Numero de poliza de cumplimiento:</label> <input type="text" name="n_poliza_cumplimiento"> <br><br>
            <label for= "fecha_inicio">Fecha de inicio de poliza:</label> <input type="date" id="Fecha" name="fecha_inicio"><br><br>
            <label for= "fecha_fin">Fecha de finalizacion de poliza:</label> <input type="date" id="Fecha" name="fecha_fin"> <br><br>
            <label for= "n_poliza_rcp">Numero de poliza RCP:</label> <input type="text" name="n_poliza_rcp"><br><br>
            <label for= "fecha_terminacion_poliza_RCP">Fecha de terminacion poliza RCP:</label> <input type="date" id="Fecha"name="fecha_terminacion_poliza_RCP"> <br><br>
            <label for= "fecha_aprobacion">Fecha de aprobación:</label> <input type="date" id="Fecha" name="fecha_aprobacion"><br><br>
			<label>Empleado</label>
		<select name="empleado"> 
				<?php 
			$consulta="SELECT * FROM tabla_empleados";
			$ejecutar=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));

			 ?>
           <option value="">Seleccione una opción</option>
			<?php foreach ($ejecutar as $opciones): ?>

				<option value="<?php echo $opciones['id_empleado'] ?>"><?php echo $opciones['nombre'] ?></option>

			<?php endforeach ?>
		</select></br></br>
			<input type="submit" name="" value="Ingresar"class="btn_enviar">
			
			
		</div>
		

	</form>


</body>
</html>