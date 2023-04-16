<?php

if(!isset($_SESSION["validarIngreso"])){

    echo '<script>window.location = "index.php?ruta=login";</script>';

    return;

}else{

    if($_SESSION["validarIngreso"] != "ok"){

        echo '<script>window.location = "index.php?=login";</script>';

        return;
    }
}
require_once "controladores/formularios.controlador.php";
$libros = ControladorFormularios::ctrSeleccionarLibros(null, null);
?>




    <form class="form" method="POST" action=""> 
        <h1>Agregar Libro</h1>
        <p>Ingrese los datos de libro</p>
        <div class="form-style">
            <label for="nombre">Nombre</label> 
            <input type="text" id="nombre" name="registroLibro"/> 
        </div>
        <div class="form-style">
            <label for="autor">Autor/a</label> 
            <input type="text" id="autor" name="registroAutor"/> 
        </div>
        <div class="form-style">
            <label for="anio">Año</label> 
            <input type="text" id="anio" name="registroAnio"/> 
        </div>

        <?php
            require_once "./controladores/formularios.controlador.php";
            $registro = ControladorFormularios::ctrRegistroLibro();
        ?>

        <button type="submit">ENVIAR</button>

    </form>


    <img class="img" src="vistas/imagenes/libroviejo.png" >