<?php
require_once("../bd/conexion.php");
$db=conexion::conexion();

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
    
        
       $sql = "INSERT INTO `datos` (`id_persona`, `nombre`, `apellido_paterno`, `apellido_materno`, `edad`, `correo`)  
         VALUES (NULL,'$nombre','$apellido_Paterno','$apellido_Materno',$edad,'$correo');";
        
         if ($db->query($sql) === TRUE) {
           echo "Datos ingresado";
           header("Location: "."http://localhost/mvc");
die();
          } else {
            echo "Error: " . $sql . "<br>" . $db->error;
          }
          
          $db->close();

    
    }else{
        echo "<br>Sin datos insertados";
        
    }

    ?>