<?php
require_once  ('../Modelo/modelo_persona2.php');
$datos = modelo_persona::obten_una_persona($_REQUEST['id_persona']);

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 

  <title>Modifica</title>
</head>
<body>
    <div>
            <div>
              <br>
              <br>
            </div>
        <form method="POST" action="../Controlador/controladorPersona2.php?metodo=modify">
            <table class="table">
            
              <tr class="table-primary">
                    <th class= "table-primary">ID</th>
                    <th class= "table-primary">Nombre</th>
                    <th class= "table-primary">Apellido Paterno</th>
                    <th class= "table-primary">Apellido Materno</th>
                    <th class= "table-primary">Edad</th>
                    <th class= "table-primary">Correo</th>
                    
                </tr>
                <?php foreach ($datos as $clave => $valor): ?> 
                    <tr>
                    <td><input type="text" readonly name="id_persona" value=<?php echo $valor['id_persona']?>></td>
                    <td><input type="text" name="nombre" value=<?php echo $valor['nombre']?>></td>
                    <td><input type="text" name="apellido_paterno" value=<?php echo $valor['apellido_paterno'] ?>></td>
                    <td><input type="text" name="apellido_materno" value=<?php echo $valor['apellido_materno'] ?>></td>
                    <td><input type="text" name="edad" value=<?php echo $valor['edad']  ?>></td>
                    <td><input type="text" name="correo" value=<?php echo $valor['correo']  ?>></td>
                    </tr>
                <?php endforeach; ?>
            </table>

           
            <div>
                <a class="button btn btn-primary" href="\MVC\index2.php">Regresar</a>
                <button class="btn btn-primary" type="submit" >Guardar</button>
                
            </div>
            </form>
    </div>
</body>
</html>
 