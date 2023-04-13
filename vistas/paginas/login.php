<body>
    <section>
        <div class="contacto_div1">
            <h2 class="contacto_h2">Administracion</h2>
            <form class="contacto_form1" action="" method="POST"> 
                <label for="usuario">Usuario</label> 
                <input type="text" id="usuario" name="ingresoUsuario"/> 
                <br>
                <label for="password">Clave</label>
                <input type="password" id="password" name="ingresoPassword"/>
                <br>
                <?php
                    require_once "controladores/formularios.controlador.php";
                    $ingreso = new ControladorFormularios();
                    $ingreso -> ctrIngreso();
                ?> 
                <input type="submit" value = "Ingresar"/>
            </form>
        </div>
        <div>
            <img class="img" src="vistas/imagenes/libros.png" >
        </div>
    </section>
</body>