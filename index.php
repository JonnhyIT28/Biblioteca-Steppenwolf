<?php

//-----------MANEJO DE ERRORES-------

//Desactivar muestra de errores (activar al finalizar el debugging)

/*
ini_set('display_errors', 'off');
*/

require_once 'vistas/manejo_errores.php';


// Generar un error intencional

/*
trigger_error("Este es un error", E_USER_ERROR);
*/

// Generar una excepción intencional

/*
function generarError() {
    throw new Exception("Esta es una excepción");
}

try {
    generarError();
} catch (Exception $e) {
    echo "Excepción: " . $e->getMessage() . "<br>";
    echo "Archivo: " . $e->getFile() . "<br>";
    echo "Línea: " . $e->getLine() . "<br>";
}
*/

require_once "controladores/plantilla_controlador.php";

//Intanciar objeto

$plantilla = new ControladorPlantilla();

//ejecucion del metodo

$plantilla ->ctrGetPlantilla();

?>