
<?php 
include 'cn.php';
$usuario = $_POST["Usuario"];
$contraseña = $_POST["Contraseña"];

$query = mysqli_query($conexion, "SELECT * FROM tabla_login WHERE Usuario = '".$usuario."' and Contraseña = '".$contraseña."'");
$nr = mysqli_num_rows($query);

if ($nr == 1)
	 {
	 	header ("location: menu.php");

	 }
	 else if ($nr == 0)
	 {
        header ("location: loguin.php");
    }


	

 ?>