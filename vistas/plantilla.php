<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!--FUENTES-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vistas/css/style.css">

    <!--ICONO-->
    <link rel="icon" type="image/png" sizes="32x32" href="imagenes/icono.png">

    <!--METAS-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Jonathan Ezequiel Ordoñez">
    <meta name="keyword" content="Biblioteca, Libros, Steppenwolf, leer">
    <meta http-equiv="60">

    <title>Biblioteca SteppenWolf</title>
</head>

<div class="grid-container">
    <div class="header">
        <header>
            
            <audio class="audio" controls autoplay loop>
                <source src="vistas/audio/pieza1.mp3" type="audio/mp3">
            </audio>

            <h1>BIBLIOTECA STEPPENWOLF</h1>

            <nav>
                <ul class="menu">
                    <li><a title="login" href="index.php?ruta=login">LOGIN</a></li>
                    <li><a title="Agregar Libro" href="index.php?ruta=agregarlibro">AGREGAR LIBRO</a></li>
                    <li><a title="Biblioteca" href="index.php?ruta=biblioteca">BIBLIOTECA</a></li>
                    <li><a title="Cerrar Sesion" href="index.php?ruta=fin">CERRAR SESION</a></li>
                </ul>
            </nav>

        </header>
    </div>

    <body>
        <?php
            if (isset($_GET['ruta'])){
            if(
                $_GET['ruta'] == "login" ||
                $_GET['ruta'] == "agregarlibro" ||
                $_GET['ruta'] == "biblioteca" ||
                $_GET['ruta'] == "editar" ||
                $_GET['ruta'] == "fin"
            ){
                include "vistas/paginas/" . $_GET["ruta"] .".php";
            } else{
            include "vistas/paginas/error404.php";
                } 
                } else{
                include "vistas/paginas/login.php";
            }
        ?>
    </body>

        <footer class="footer">
            <section>
                <p class="footer-p1">Jonathan Ezequiel Ordoñez</p>
                <p class="footer-p2"><a href="mailto:JonnhyDev@gmail.com">JonnhyDev@gmail.com</a></p>
            </section>
        </footer>
</div>

</html>