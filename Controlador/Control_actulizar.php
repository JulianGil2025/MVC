<?php 
require_once("../bd/conexion.php");
$db=conexion::conexion();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_persona = $_POST["id_persona"];
        $nombre = $_POST["nombre"];
        $apellido_Paterno = $_POST["apellido_paterno"];
        $apellido_Materno = $_POST["apellido_materno"];
        $edad = $_POST["edad"];
        $correo = $_POST["correo"];

        
$sql = "update datos set  nombre='$nombre',apellido_Paterno='$apellido_Paterno',apellido_Materno='$apellido_Materno',edad=$edad,correo='$correo'
 where id_persona = $id_persona";


if ($db->query($sql) === TRUE) {
    echo "<br>Actulizados ".$nombre;
    ;
   } else {
     echo "Error: " . $sql . "<br>" . $db->error;
   }
   
   $db->close();

}else {
    echo "sin datos actulizados";
}

    ?>