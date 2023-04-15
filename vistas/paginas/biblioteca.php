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

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Autor</th>
            <th>Año</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        
    <?php foreach ($libros as $key => $value): ?>

        <tr>
            <td><?php echo ($key+1); ?></td>
            <td><?php echo $value["nombre"]; ?></td>
            <td><?php echo $value["autor"]; ?></td>
            <td><?php echo $value["anio"]; ?></td>
            <td><?php echo $value["fecha"]; ?></td>
            <td>
            
            <div>
                <a href="index.php?ruta=editar&id=<?php echo $value["id"]; ?>" >Editar</a>

                <form method="post">

                    <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarLibro">

                    <button type="submit">Borrar</button>
                
                    <?php
                        require_once "controladores/formularios.controlador.php";
                        $eliminar = new ControladorFormularios();
                        $eliminar -> ctrEliminarLibro();
                
                    ?>
                
                </form>
            </div>


            </td>
    </tr>
    
    <?php endforeach ?>

    </tbody>
</table>
