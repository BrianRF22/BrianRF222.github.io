<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SARAD</title>
    <link rel="shortcut icon" href="/sarad/estilo/img/logo.png">
    <link rel="stylesheet" href="/sarad/estilo/css/bootstrap.min.css">
    <link rel="stylesheet" href="/sarad/estilo/iconos/css/font-awesome.min.css">
    <style>
        body {
            background-color: #003300; /* Verde oscuro */
            color: white;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
            margin: 0; /* Eliminar margen por defecto */
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            animation: fadeIn 1s ease-in;
            padding: 20px; /* Añadir un poco de padding */
        }

        .container {
            background-color: #004d00; /* Verde más claro */
            border: 5px solid gold;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            padding: 40px;
            text-align: center;
            width: 100%; /* Ancho adaptable */
            max-width: 400px; /* Ancho máximo */
            animation: slideIn 0.5s ease-in-out;
        }

        .image-container {
            border: 3px solid gold;
            border-radius: 10px;
            padding: 10px;
            background-color: #003d00; /* Tono más oscuro de verde */
            width: 150px; /* Ancho fijo */
            height: 150px; /* Alto fijo */
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px auto; /* Centrando el contenedor de imagen */
        }

        h1, h2 {
            color: white; /* Color blanco para las letras */
            font-family: 'Verdana', sans-serif; /* Cambiar fuente */
        }

        .btn-custom {
            position: relative;
            overflow: hidden;
            background-color: #006600; /* Verde medio */
            color: white; /* Color blanco para letras */
            border: 2px solid gold;
            border-radius: 20px; /* Bordes más redondeados */
            transition: background-color 0.3s, transform 0.3s;
            width: 100%; /* Ancho adaptativo */
            max-width: 150px; /* Ancho máximo */
            height: 50px; /* Alto fijo */
            display: flex; /* Para centrar el contenido */
            justify-content: center; /* Centrado horizontal */
            align-items: center; /* Centrado vertical */
            font-size: 20px; /* Tamaño de fuente aumentado */
            margin: 10px auto; /* Margen para separación */
            text-decoration: none; /* Eliminar subrayado */
        }

        .btn-custom:hover {
            background-color: #007700; /* Verde más oscuro */
            transform: translateY(-3px);
        }

        .btn-custom i { /* Color dorado para los iconos */
            color: gold; 
            margin-left: 5px; /* Espaciado entre texto e icono */
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(-30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        img {
            width: 100%; /* La imagen ocupará el 100% del contenedor */
            height: auto;
        }

        /* Contenedor para los botones */
        .button-container {
            display: flex;
            flex-direction: column; /* Cambia a columna en pantallas pequeñas */
            align-items: center; /* Centra los botones */
            margin-top: 20px; /* Espaciado superior */
        }

        @media (min-width: 576px) { /* Para pantallas más grandes */
            .button-container {
                flex-direction: row; /* Cambia a fila en pantallas más grandes */
                justify-content: space-between; /* Coloca los botones en los extremos */
            }
        }
    </style>
</head>
<body>
    <main>
        <div class="container">
            <div class="image-container">
                <img alt="Logo" src="/sarad/estilo/img/logo.png">
            </div>
            <h2 class="display-2 fw-bold">Bienvenido/a a:</h2> 
            <h1 class="display-1 fw-bold">La Aplicación de Registros Anecdóticos.</h1>
            
            <div class="button-container">
                <a href="index.html" class="btn-custom">Página Web <i class="bi bi-display"></i></a>
                <a href="/sarad/login" class="btn-custom">Ingresar <i class="fa fa-user-circle-o"></i></a>
            </div>
        </div>
    </main>
    <script src="/sarad/estilo/js/bootstrap.min.js"></script>
</body>
</html>