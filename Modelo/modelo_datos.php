<?php
require_once("bd/conexion.php");

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
}


?>