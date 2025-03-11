<form action="../Controlador/Control_actulizar.php"  method="post">

<?php
require_once("../bd/conexion.php");
$db=conexion::conexion();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<br>Estos son los datos a Actulizar  <br>";
    $nombre = $_POST["nombre"];
 
    

    $sql = "select * from datos where nombre = '$nombre'";

    $resultado  = mysqli_query($db ,$sql);

    $regitros = mysqli_fetch_assoc($resultado);

    echo "<input name='id_persona'  readonly value=".$regitros["id_persona"].">";
    echo "<input name='nombre'  value=".$regitros["nombre"].">";
    echo "<input name='apellido_paterno'  value=".$regitros["apellido_paterno"].">";
    echo "<input name='apellido_materno' value=".$regitros["apellido_materno"].">";
    echo "<input name='edad' value=".$regitros["edad"].">";
    echo "<input name='correo' value=".$regitros["correo"].">";
  


}       
            

?>
<br><br>
<input TYPE="submit" value="Actulizar Persona">
</form>

