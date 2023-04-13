<?php
class Conexion {
    static public function conectar(){
        /*
        $link = new PDO("mysql:host=localhost;port=3306;dbname=id19524165_contacto", "id19524165_jeocarp", "O=rl1afl&Z84hM]t");
        */
        
        $link = new PDO("mysql:host=localhost;port=3306;dbname=t.p jonathan ordoñez", "root", "");
        
        $link->exec("set names utf8");

        return $link;
    }
}