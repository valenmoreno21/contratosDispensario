<?php 
include("cn.php");

 ?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Regisro de cuentas bancarias</title>
	<link rel="stylesheet" type="text/css" href="./cuenta_bancaria.css">
</head>
<body>

<form action="registrar4.php" method="post" class="form-register">
		<h2 class="form__titlo"> Formulario para regisro de Cuentas bancarias </h2>
		<div class="contenedor-inputs"> 
			<label for= "n_cuenta">Número de cuenta:</label> <input type="text" name="n_cuenta"> <br>
            <label for= "tipo_cuenta">Tipo de cuenta:</label> <input type="text" name="tipo_cuenta"><br>
            <label for= "entidad_bancaria">Entidad bancaria:</label> <input type="text" name="entidad_bancaria"><br>
			<label for= "rublo_presupuestal">Rublo presupuestal:</label> <input type="text" name="rublo_presupuestal"> <br>
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