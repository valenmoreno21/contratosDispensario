<!DOCTYPE html>
<html lang="es">
<head>
    <title>Menú Segundario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            position: relative;
            color: black;
            overflow-x: hidden;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Estilos para imágenes laterales de pantalla completa */
        .imagen-lateral {
            position: fixed;
            top: 0;
            width: 100px;
            height: 100vh;
            object-fit: cover;
        }

        .izquierda {
            left: 0;
        }

        .derecha {
            right: 0;
        }

        .imagen-superior {
            text-align: center;
            background-color: white;
            padding: 10px;
            width: 100%;
        }

        .imagen-superior img {
            width: 250px;
            height: auto;
            animation: fadeIn 1.5s ease-in-out;
        }

        /* Estilos del menú */
        .menu {
            background-color: #800020;
            padding: 10px;
            width: 100%;
            text-align: center;
        }

        .menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .menu li {
            position: relative;
        }


        .menu a {
            background-color: #800020;
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
            padding: 12px 18px;
            border-radius: 8px;
            display: inline-block;
            transition: 0.3s;
            position: relative;
            overflow: hidden;
        }

        .menu a:hover {
            background-color: #5a0015;
            transform: scale(1.1);
        }

        .submenu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #800020;
            padding: 10px;
            border-radius: 8px;
            text-align: left;
            min-width: 200px;
        }

        .submenu a {
            display: block;
            padding: 8px;
            font-size: 16px;
            border-radius: 5px;
        }

        .submenu a:hover {
            background-color: #5a0015;
        }

        .menu li:hover .submenu {
            display: block;
        }



        /* Contenedor de imágenes */
        .imagen-container {
            width: 350px;
            height: 350px;
            padding: 10px;
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #ffffff;
        }

        .imagen-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .imagen-container img:hover {
            transform: scale(1.05);
        }

        /* Barra de búsqueda */
        .busqueda {
            margin-top: 20px;
            display: flex;
            gap: 10px;
            align-items: center;
            animation: fadeIn 2s ease-in-out;
        }

        .busqueda input {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #800020;
            background-color: #ffffff;
            color: black;
            width: 250px;
        }

        .busqueda button {
            background-color: #800020;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .busqueda button:hover {
            background-color: #5a0015;
        }
    </style>
</head>
<body>

    <img class="imagen-lateral izquierda" src="lateral1.png" alt="Imagen Izquierda">
    <img class="imagen-lateral derecha" src="lateral2.png" alt="Imagen Derecha">

    <header>
        <div class="imagen-superior">
            <img src="logo4.png" alt="Logo Superior">
        </div>
        <nav class="menu">
            <ul>
                <li>
                    <a href="#">Registros De Usuarios</a>
                    <div class="submenu">
                        <a href="http://localhost/practicas/empleados.php">Formulario Empleado</a>
                        <a href="http://localhost/practicas/form_contra.php">Formulario Contratacion</a>
                        <a href="http://localhost/practicas/supervisor.php">Formularion Supervisor</a>
                        <a href="http://localhost/practicas/form_poliza.php">Formularion Polizas</a>
                        <a href="http://localhost/practicas/formulariosalud.php">Formularion Salud</a>
                        <a href="http://localhost/practicas/form_firmas.php">Formularion Firmas</a>
                        <a href="http://localhost/practicas/cuenta_banco.php">Formularion Cuenta Bancaria</a>
                        <a href="http://localhost/practicas/usuario.php">Formularion Usuarios</a>
                        
                    </div>
                </li>
                <li><a href="">Contrato De Prestación De Servicios</a></li>
                <li><a href="">Aprobación De póliza</a></li>
                <li><a href="">Acta De Inicio</a></li>
            </ul>
        </nav>
    </header>

    <div class="imagen-container">
        <img src="logo2.jpg" alt="Cruz">
        <img src="ejercito.png" alt="Ejercito">
    </div>

    <div class="busqueda">
        <input type="text" placeholder="Buscar empleado..." name="buscar">
        <button type="submit">Buscar</button>
    </div>

</body>
</html>
