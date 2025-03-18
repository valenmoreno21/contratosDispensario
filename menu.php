<?php
  session_start();

  if (!isset($_SESSION['usuario'])) {
    header("Location: index.html");
  }

  echo "Bienvenido, " . $_SESSION['usuario'] . "!";
  echo "<br>Tu perfil es: " . $_SESSION['perfil'];
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <title>Menu</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="estilos17.css">
    <style>
        
        .botones-container {
            display: flex;
            justify-content: flex-end; 
            gap: 10px; 
            padding: 10px; 
        }

   
        .imagen-container {
            width: 350px; 
            height: 350px; 
            border: 1px solid #ccc;
			border-color: #2C2C2C;
            background: url('ejercito.png') no-repeat center center;
            background-size: cover; 
            margin-top: 80px;  
        }
    </style>
</head>
<body style="background: #2C2C2C;">
    <header >
        <nav class="menu">
            <ul>
                <li><a href="http://localhost/practicas/menu2.php">Formularios de Registros</a></li>
                <li><a href="http://localhost/carga/base_profesores.php">Contrato de prestación de servicios</a></li>
                <li><a href="http://localhost/carga/base_estudiantes.php">Acta de inicio</a></li>
                <li><a href="http://localhost/carga/base_areas.php">Aprobación de póliza</a></li>
            </ul>
        </nav>
    </header>

    
    <div class="botones-container">
        <button name="boton1" type="submit">Aprobación 1</button> <br>
        <button name="boton2" type="submit">Aprobación 2</button>
    </div>

    
    <div class="imagen-container"></div>
</body>
</html>
