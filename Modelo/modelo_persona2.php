<?php
require_once 'C:\laragon\www\MVC\bd\conexion2.php';

class modelo_persona{
    public $conexion;
    
    public static function obtener_datos(){
        $conexion = new conexion();
        $consulta=$conexion->query("select `id_persona`, `nombre`, `apellido_paterno`, `apellido_materno`, `edad`, `correo` from datos;");
        while($filas=$consulta->fetch_assoc()){
            $personas[]=$filas;
        }
        if(empty($personas)){

        }else{
            return $personas;
        }
        
    }

    public static function agregarDato($post) {
        $conexion = new conexion();
        $nombre = $post["nombre"];
        $apellido_paterno = $post["apellido_Paterno"];
        $apellido_materno = $post["apellido_Materno"];
        $edad = $post["edad"];
        $correo = $post["correo"];
    
        $insertar  = "INSERT INTO `datos` (`id_persona`, `nombre`, `apellido_paterno`, `apellido_materno`, `edad`, `correo`)  
        VALUES (NULL,'$nombre','$apellido_paterno','$apellido_materno',$edad,'$correo');";
        $conexion->query($insertar);     
    }
  
  
    public static function eliminardato($post) {
        $conexion = new conexion();
        $id_persona = $post["id_persona"];
        $eliminar  = "delete from datos where id_persona = $id_persona";
        $conexion->query($eliminar); 
    }

    public static function obten_una_persona($busqueda){
        $conexion = new conexion();
        $consulta = $conexion->query("SELECT id_persona, nombre, apellido_paterno, apellido_materno, edad, correo FROM datos WHERE id_persona = ".intval($busqueda).";");
        while($filas=$consulta->fetch_assoc()){
            $personas[]=$filas;       
        }
        return $personas;
    }


    public static function guardar_datos($datos){
        $conexion = new conexion();    
        $id_persona = intval($datos['id_persona']);
        $nombre = $datos['nombre'];
        $apellido_paterno = $datos['apellido_paterno'];
        $apellido_materno = $datos['apellido_materno'];
        $edad = intval($datos['edad']);
        $correo = $datos['correo'];
        $conexion->query("UPDATE datos SET nombre =' $nombre' , apellido_paterno = '$apellido_paterno', 
                                    apellido_materno = '$apellido_materno', edad = $edad , correo= '$correo' 
                                    WHERE id_persona = $id_persona;");
        
    }
}
?>
