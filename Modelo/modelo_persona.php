<?php
require_once("../bd/conexion.php");
class modelo_persona{
    
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


   public function crearPersona(){

   }

   public function eliminarPersona(){



    
   }

   public function actualizarPersona(){

   }



}
 

?>
