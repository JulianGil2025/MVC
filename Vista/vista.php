<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista</title>
</head>
<body>
<br><br>
<input type="button" onclick="location='Vista/vista_crear.php'"  value="Agregar Persona"/>
<br><br>
<?php
            foreach ($datos as $dato) {
                echo $dato["id_persona"]."<br/>";
                echo $dato["nombre"]."<br/>";
                echo $dato["apellido_paterno"]."<br/>";
                echo $dato["apellido_materno"]."<br/>";
                echo $dato["edad"]."<br/>";
                echo $dato["correo"]."<br/>";
            }
?>



<br><br>
<h2> Datos para eliminar </h2>
<form action="Modelo/modelo_eliminar.php" method="Post">
<h3>  
<?php
     echo '<select name="nombre">';
            foreach ($datos as $dato) {
                
                echo "<option>".$dato["nombre"];
            }
?>
</h3>  </select>
<br><br>
<input TYPE="submit" value="Borrar">
</form>


<br><br>
<h2> Datos para actulizar  </h2>
<form action="Modelo/modelo_actulizar.php" method="Post">
<h3>  
<?php
     echo '<select name="nombre">';
            foreach ($datos as $dato) {
                echo "<option>".$dato["nombre"];
                
            }
?>
</h3>  </select>
<br><br>
<input TYPE="submit" value="Actulizar">
</form>


</body>
</html>