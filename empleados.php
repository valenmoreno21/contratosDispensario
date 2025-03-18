<?php 
include("cn.php");
$usuarios = "SELECT * FROM tabla_empleados"

 ?> 
 
 <html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Regisro de Empleados</title>
	<link rel="stylesheet" type="text/css" href="empleado.css">
</head>
<body>
	<form action="registrar2.php" method="post" class="form-register">
		<h2 class="form__titlo"> Formulario para registro de Empleados </h2>
		<div class="contenedor-inputs"> 
			<label for= "n_registro">Número de registro:</label> <input type="text" name="n_registro"> <br>
            <label for= "n_proceso">Número de proceso:</label> <input type="text" name="n_proceso"><br>
            <label for= "nombre">Nombre:</label> <input type="text" name="nombre"><br>
			<label for= "unidad">Unidad:</label> <input type="text" name="unidad"> <br>
            <label for= "n_cedula">Número de Cédula:</label> <input type="text" name="n_cedula"><br>
            <label for= "fecha_expedicion_documento">Fecha de expedición de CC:</label> <input type="date" id="Fecha" name="fecha_expedicion_documento"><br>
			<label for= "lugar_expedicion_documento">Lugar de expedición de CC:</label> <input type="text" name="lugar_expedicion_documento"> <br>
            <label for= "fecha_nacimiento">Fecha de nacimiento:</label> <input type="date" id="fecha" name="fecha_nacimiento"><br>
            <label for= "direccion">Dirección:</label> <input type="text" name="direccion"><br>
			<label for= "telefono">Teléfono:</label> <input type="text" name="telefono"> <br>
            <label for= "Correo">Correo Electronico:</label> <input type="text" name="Correo"><br>
            <label for= "cod_verificacion_rut">Código de verificación de RUT:</label> <input type="text" name="cod_verificacion_rut"><br>
			<label for= "area_desempenada">Area desmpeñada:</label> <input type="text" name="area_desempenada"> <br>
			<input type="submit" name="" value="Ingresar"class="btn_enviar">
			
			
		</div>
		

	</form>


</body>
</html>