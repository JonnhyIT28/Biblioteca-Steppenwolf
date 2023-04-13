<?php 
require("modelos/formularios_modelo.php");

class ControladorFormularios{

    public function ctrIngreso(){

        if(isset($_POST["ingresoUsuario"])){
            $tabla = "administradores";
            $item = "usuario";
            $valor = $_POST["ingresoUsuario"];

            $respuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla, $item, $valor);

            if ($respuesta["usuario"] == $_POST["ingresoUsuario"] && $respuesta["password"] == $_POST["ingresoPassword"]){
                $_SESSION["validarIngreso"] = "ok";

                echo '<script>

                if (window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );

                }

                window.location = "index.php?ruta=biblioteca";

            </script>';
            }   else {
                echo '<script> if (window.history.replaceState ) {
                    
                    window.history.replaceState( null, null, window.location.href );
                    
            } </script>';
            echo '<div class="alert alert-danger"> Error, intente nuevamente</div>';

            }
        }
    }

//----------------------------------------------------------------------------------------------------

    static public function ctrRegistroLibro(){
        
        
        if(isset($_POST["registroLibro"])){

            $tabla = "libros";

            $datos = array(
                "nombre" => $_POST["registroLibro"],
                "autor" => $_POST["registroAutor"],
                "anio" => $_POST["registroAnio"]
            );
            
            $respuesta = ModeloFormularios::mdlRegistroLibro($tabla, $datos);
            return $respuesta;
        }
    }

// ------------------------------------------------------------------------------------------
static public function ctrSeleccionarRegistros ($item, $valor){
    $tabla = "administradores";
    $respuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla, $item, $valor);
    return $respuesta;
}    

static public function ctrSeleccionarLibros ($item, $valor){
        $tabla = "libros";
        $respuesta = ModeloFormularios::mdlSeleccionarLibros($tabla, $item, $valor);
        return $respuesta;
    }


//---------------------------------------------------------------------------------

    static public function ctrActualizarLibro()
    {

        if (isset($_POST["actualizarLibro"])){

            if ($_POST["actualizarAnio"] !=""){
                $anio = $_POST["actualizarAnio"];

            }else{
                $anio = $_POST["anioActual"];
            }
            $tabla = "libros";

            $datos = array(
                "id" => $_POST["idLibro"],
                "nombre" => $_POST["actualizarLibro"],
                "autor" => $_POST["actualizarAutor"],
                "anio" => $anio
                

            );

            $respuesta = ModeloFormularios::mdlActualizarLibro($tabla, $datos);
            if ($respuesta == "ok") {

                echo '<script>

                if (window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );

                }

                window.location = "index.php?ruta=biblioteca";

            </script>';
            }
        }
    }


//------------------ELIMINAR--------------------------------------

    public function ctrEliminarLibro(){
    if (isset($_POST ["eliminarLibro"])){

        $tabla = "libros";

        $valor = $_POST["eliminarLibro"];

        $respuesta = ModeloFormularios::mdlEliminarLibro($tabla, $valor);
        if ($respuesta == "ok") {

            echo '<script>

            if (window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );

            }

            window.location = "index.php?ruta=biblioteca";

        </script>';
        }
        }
    }
}