<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista</title>
</head>
<body>

<form action="Vista/vista_datos.php"  method="post">
  Nombre: <input type="text" name="nombre"><br>
  Apellido Paterno: <input type="text" name="apellido_Paterno"><br>
  Apellido Materno: <input type="text" name="apellido_Materno"><br>
  Edad: <input type="number" name="edad"><br>
  Correo Eletrico: <input type="email" name="correo">
  <input type="submit">
</form>

<?php
            foreach ($datos as $dato) {
                echo $dato["nombre"]."<br/>";
                echo $dato["correo"]."<br/>";
            }
?>

<h2>Mayores de 18 </h2>

<?php 
   foreach ($datos_per as $dato1) {
    echo $dato1["nombre"]."<br/>";
    echo $dato1["correo"]."<br/>";
}



?>


</body>
</html>