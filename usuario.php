<?php 
include("cn.php");
$usuarios = "SELECT * FROM tabla_usuario"

 ?>


<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario registro de usuarios</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<base href="http://localhost/contratosDispensario/">

</head>
<body>
	
<form action="registrar1.php" method="post" class="form-register">
		<h2 class="form__titulo"> Formulario para registros de usuarios </h2>
		<div class="contenedor-inputs"> 
			<label for= "rol">Rol:</label> <input type="text" name="rol"> <br></br>
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
            <label for= "usuario">Usuario:</label> <input type="text" name="usuario"><br></br>
			<label for= "contraseña">Contraseña:</label> <input type="text" name="contraseña"><br><br>
			<input type="submit" name="" value="Ingresar"class="btn_enviar"><br><br><br><br>
			<center><BUTTON> <a type="submit" id="export_data" name='generar_excel' value="Export to excel" href="exportar_usuarios.php">Ver base de datos en Excel </a></center>
			
		</div>
		

	</form>


</body>
</html>