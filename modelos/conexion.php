<?php
class Conexion {
    static public function conectar(){
        
        $link = new PDO("mysql:host=localhost;port=3306;dbname=id21049244_biblioteca_bd", "id21049244_admin", "Admin123$");
        
        /*
        $link = new PDO("mysql:host=localhost;port=3306;dbname=t.p jonathan ordoñez", "root", "");
        */
        $link->exec("set names utf8");

        return $link;
    }
}