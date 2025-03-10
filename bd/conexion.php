<?php

class conexion{
  
    public static function conexion(){
        $conexion=new mysqli("localhost", "julian", "123456", "personas");
        $conexion->query("SET NAMES 'utf8'");
        echo "Conexion realizada";
        return $conexion;


    }

}

?>