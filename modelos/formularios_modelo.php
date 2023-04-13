<?php

require_once ("conexion.php");
class ModeloFormularios{
    
    //INSERTAR LIBROS
    static public function mdlRegistroLibro($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, autor, anio) VALUES (:nombre, :autor, :anio)");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":autor", $datos["autor"], PDO::PARAM_STR);
        $stmt->bindParam(":anio", $datos["anio"], PDO::PARAM_STR);
        
        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->closeCursor();
        $stmt = null;  
    }



    //SELECCIONAR INGRESO
    static public function mdlSeleccionarRegistro($tabla, $item, $valor){

        if ($item == null && $valor == null ){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt->execute();

            return $stmt->fetchAll();

        }   else{

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch();

            $stmt->closeCursor();

            $stmt= null;

        }
    }




    //SELECCIONAR LIBROS
    static public function mdlSeleccionarLibros($tabla, $item, $valor){

        if ($item == null && $valor == null) {
            $stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla ORDER BY id DESC");

            $stmt->execute();

            return $stmt->fetchAll();
        } else {

            $stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla WHERE $item = :$item ORDER BY id DESC");

            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch();

            $stmt->closeCursor();

            $stmt= null;

        }
    }   

    //ACTUALIZAR LIBRO
    static public function mdlActualizarLibro($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, autor=:autor, anio=:anio WHERE id = :id");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":autor", $datos["autor"], PDO::PARAM_STR);
        $stmt->bindParam(":anio", $datos["anio"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
        
        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->closeCursor();
        $stmt = null;  
    }

    //ELIMINAR LIBRO
    static public function mdlEliminarLibro($tabla, $valor){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

        $stmt->bindParam(":id", $valor, PDO::PARAM_STR);
        
        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->closeCursor();
        $stmt = null;  
    }
}