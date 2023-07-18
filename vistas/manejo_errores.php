<?php

function manejoErrores($nivel, $mensaje, $archivo, $linea) {
    if ($nivel !== E_WARNING && $nivel !== E_NOTICE && $nivel !== E_USER_NOTICE) {
        switch ($nivel) {
            case E_PARSE:
            case E_ERROR:
            case E_CORE_ERROR:
            case E_COMPILE_ERROR:
            case E_USER_ERROR:
                $tipo = "Error fatal";
                break;
            default:
                $tipo = "Desconocido";
                break;
        }

        echo "<strong>$tipo</strong><br>";
        echo "Mensaje: $mensaje<br>";
        echo "Archivo: $archivo<br>";
        echo "Línea: $linea<hr>";
    }
}

// Establecer manejo_errores como manejador de errores
set_error_handler('manejoErrores');


