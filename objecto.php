<?php 
include("cn.php");

 ?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario registro de Objecto</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	
<form action="registrar7.php" method="post" class="form-register">
		<h2 class="form__titulo"> Formulario para registro de Objecto </h2>
		<div class="contenedor-inputs"> 
			<label for= "nombre">Nombre:</label> <input type="text" name="nombre"> <br><br>
            <label for= "descripcion">Descripción:</label> <input type="text" name="descripcion"><br><br>
			<input type="submit" name="" value="Ingresar"class="btn_enviar">
			
			
		</div>
		

	</form>


</body>
</html>