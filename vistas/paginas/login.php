<form class="form1" action="" method="POST"> 
    <h1>Administracion</h1>
    <div class="form-style">
        <label for="usuario">Usuario</label> 
        <input type="text" id="usuario" name="ingresoUsuario"/> 
    </div>
    <div class="form-style">
        <label for="password">Clave</label>
        <input type="password" id="password" name="ingresoPassword"/>
    </div>
    <?php
        require_once "controladores/formularios.controlador.php";
        $ingreso = new ControladorFormularios();
        $ingreso -> ctrIngreso();
    ?> 
    <input type="submit" value = "Ingresar"/>
</form>

<img class="img" src="vistas/imagenes/libros.png" >