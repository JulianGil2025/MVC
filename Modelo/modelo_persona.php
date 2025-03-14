<?php
require_once 'C:\xampp\htdocs\MVC\bd\conexion.php';

class modelo_persona{
    public $conexion;
    private  $db; 
    private $personas;

    public function __construct()
    {
       $this-> db=conexion::conexion();
        $this-> personas=array();
    }

    
    public function obtener_datos(){
        $consulta=$this->db->query("select * from datos;");
    while($filas=$consulta->fetch_assoc()){
        $this->personas[]=$filas;
    }
    return $this->personas;
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
  
  
  public static function eliminardato($conexion, $id_persona) {
    $eliminar  = "delete from datos where id_persona = $id_persona";
     $conexion->query($eliminar); 
  }

  public function obten_una_persona($busqueda){
    $consulta =$this->db->query("SELECT id_persona, nombre, apellido_paterno, apellido_materno, edad, correo FROM datos WHERE id_persona = ".intval($busqueda).";");
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
    $consulta=$this->db->query("UPDATE datos SET nombre =' $nombre' , apellido_paterno = '$apellido_paterno', 
                                apellido_materno = '$apellido_materno', edad = $edad , correo= '$correo' 
                                WHERE id_persona = $id_persona;");
    }
}

}
 

?>
