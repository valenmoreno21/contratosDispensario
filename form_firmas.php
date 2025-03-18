<?php 
include("cn.php");


 ?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario regisro de firmas</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<h1><br><br></h1>
	<form action="registrar9.php" method="post" class="form-register">
		<h2 class="form__titulo"> Formulario para registros de firmas </h2>
		<div class="contenedor-inputs"> 
		<label>usuario</label>
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
		<label>Numero de contrato</label>
		<select name="contratacion"> 
				<?php 
			$consulta="SELECT * FROM tabla_contratacion";
			$ejecutar=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));

			 ?>
          <option value="">Seleccione una opción</option>
			<?php foreach ($ejecutar as $opciones): ?>

				<option value="<?php echo $opciones['id'] ?>"><?php echo $opciones['id'] ?></option>

			<?php endforeach ?>
		</select></br></br>
			<label for= "firma_data">Firma:</label> <input type="text" name="firma_data"> <br></br>

			<input type="submit" name="" value="Ingresar"class="btn_enviar">
			
			
		</div>
		

	</form>


</body>
</html>