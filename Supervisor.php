<?php 
include("cn.php");

 ?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario regisro de supervisor</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<form action="registrar6.php" method="post" class="form-register">
		<h2 class="form__titulo"> Formulario para registros de supervisor </h2>
		<div class="contenedor-inputs"> 
		<label>Usuario</label>
		<select name="usuario"> 
				<?php 
			$consulta="SELECT * FROM tabla_usuario";
			$ejecutar=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));

			 ?>
			<option value="">Seleccione una opción</option>
			<?php foreach ($ejecutar as $opciones): ?>

				<option value="<?php echo $opciones['id'] ?>"><?php echo $opciones['usuario'] ?></option>

			<?php endforeach ?>
		</select></br></br>
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