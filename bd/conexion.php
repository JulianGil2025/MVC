<?php

class conexion{
  
    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "", "personas");
        $conexion->query("SET NAMES 'utf8'");
        //echo "Conexion realizada";
        return $conexion;


    }

}

?>