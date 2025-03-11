<?php
class modelo_datos{

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


public function insertar_datos(){


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $apellido_Paterno = $_POST["apellido_Paterno"];
        $apellido_Materno = $_POST["apellido_Materno"];
        $edad = $_POST["edad"];
        $correo = $_POST["correo"];
    
    
        echo "<br>Estos son los datos a insertar <br>";
         echo "<br> Nombre  ",$nombre;
         echo "<br>apellido_Paterno  ",$apellido_Paterno;
         echo "<br> apellido_Materno  ",$apellido_Materno;
         echo "<br>  EDAD ",$edad;
         echo "<br> correo ",$correo;
    

        // $insertar = "INSERT INTO datos into(NULL,$nombre,$apellido_Paterno,$apellido_Materno,$edad,$correo);";
        
        // if ($this->db->query($insertar) === TRUE) {
            //echo "Datos ingresado";
        //  } else {
          //  echo "Error: " . $insertar . "<br>" . $this->db->error;
         // }
          
         // $this->db->close();

    
    }else{
        echo "<br>Sin datos insertados";
        
    }
    
    
}

}

?>