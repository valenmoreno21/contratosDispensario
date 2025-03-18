<?php

include 'cn.php';


  session_start();

  $usuario = $_POST['usuario'];
  $contraseña = $_POST['contraseña'];


  if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM tabla_usuario WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
  $resultado = mysqli_query($conexion, $sql);

  if (mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_assoc($resultado);
    $_SESSION['usuario'] = $fila['usuario'];
    header("Location: menu1.php");
  } else {
    header("Location: loguin.php");
  }

  mysqli_close($conexion);