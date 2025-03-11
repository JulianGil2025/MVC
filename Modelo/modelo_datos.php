<?php
require_once __DIR__."\..\bd\conexion.php";

class modelo_datos{

    private  $db; 
    private $personas;

    
    public function __construct()
    {
        $this-> db=conexion::conexion();
        $this-> personas=array();
    }

    public function obtener_datos(){
        $consulta=$this->db->query("select * from personas;");
    while($filas=$consulta->fetch_assoc()){
        $this->personas[]=$filas;

    }
    return $this->personas;
    }

    public function obtener_datos_mas(){
        $consulta=$this->db->query("select * from datos where edad > 18 ;");
        while($filas=$consulta->fetch_assoc()){
            $this->personas[]=$filas;
        
    }
    return $this->personas;
    }

    public function obten_una_persona($busqueda){
        $consulta =$this->db->query("SELECT id_persona, nombre, apellido_paterno, apellido_materno, edad, correo FROM personas WHERE id_persona = ".intval($busqueda).";");
        while($filas=$consulta->fetch_assoc()){
            $this->personas[]=$filas;
        
    }
         return $this->personas;
    }

    public function guardar_datos($datos){
        if(empty($datos)){
        }else{      
        $id_persona = intval($datos['id_persona']);
        $nombre = $datos['nombre'];
        $apellido_paterno = $datos['apellido_paterno'];
        $apellido_materno = $datos['apellido_materno'];
        $edad = intval($datos['edad']);
        $correo = $datos['correo'];
        $consulta=$this->db->query("UPDATE personas SET nombre =' $nombre' , apellido_paterno = '$apellido_paterno', 
                                    apellido_materno = '$apellido_materno', edad = $edad , correo= '$correo' 
                                    WHERE id_persona = $id_persona;");
        }
    }
}


?>