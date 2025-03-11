<?php
require_once("../bd/conexion.php");
$db=conexion::conexion();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
   

    echo "<br>Estos son los datos a borrar <br>";

         echo "<br> Nombre  ",$nombre;

    $borrar = "delete from datos where nombre = '$nombre'";

         if ($db->query($borrar) === TRUE) {
            echo "Datos eliminado ";
           } else {
             echo "Error: " . $borrar . "<br>" . $db->error;
           }  
           $db->close();
       
}else{

    echo "Sin datos borrar";

}


?>