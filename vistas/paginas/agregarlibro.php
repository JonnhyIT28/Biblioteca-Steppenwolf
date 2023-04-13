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



<div class="contacto_div1">

        <h1 class="contacto_h2">Agregar Libro</h1>
        <p class="contacto_form1">Ingrese los datos de libro</p>
        
        <form class="contacto_form1" method="POST" action=""> 

        
            <div>
                <label for="nombre">Nombre</label> 
                <input type="text" id="nombre" name="registroLibro"/> 
                <br>

                <label for="autor">Autor/a</label> 
                <input type="text" id="autor" name="registroAutor"/> 
                <br>
                
                <label for="anio">Año</label> 
                <input type="text" id="anio" name="registroAnio"/> 
                <br>
            
                <?php
                    require_once "./controladores/formularios.controlador.php";
                    $registro = ControladorFormularios::ctrRegistroLibro();
                ?>

                <button type="submit">ENVIAR</button>


            </div>

        </form>
    </div>
    <img class="img" src="vistas/imagenes/libroviejo.png" >
</body>