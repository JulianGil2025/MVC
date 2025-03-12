<?php
require_once "Modelo/modelo_persona2.php";
$datos = modelo_persona::obtener_datos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
  <title>CRUD</title>
</head>
<body>
    <div>
      <?php if(empty($datos)):?>
            <div class="btn-group " role="group" aria-label="Basic example">
                  <a class="button btn btn-primary" href="Vista/vistaAgregar.php">Agrega Persona</a>
            </div>
            <p>No hay datos cargados en la Base por mostrar</p>
      <?php else:?>
            <div>
              <br>
              <br>
            </div>
        
            <table class="table">
            
              <tr class="table-primary">
                    <th class= "table-primary">ID</th>
                    <th class= "table-primary">Nombre</th>
                    <th class= "table-primary">Apellido Paterno</th>
                    <th class= "table-primary">Apellido Materno</th>
                    <th class= "table-primary">Edad</th>
                    <th class= "table-primary">Correo</th>
                    <td class= "table-primary"></td>
                    <td class= "table-primary"></td>
                </tr>
                <?php foreach ($datos as $clave => $valor): ?> 
                    <tr>
                    <td><?= $valor['id_persona']; ?></td>
                    <td><?= $valor['nombre']; ?></td>
                    <td><?= $valor['apellido_paterno']; ?></td>
                    <td><?= $valor['apellido_materno']; ?></td>
                    <td><?= $valor['edad']; ?></td>
                    <td><?= $valor['correo']; ?></td>
                    <td ><a class="button btn btn-primary" href="Vista/vistaModificar.php?id_persona=<?= $valor['id_persona']?>">Modificar</a></td>
                    <td ><a class="button btn btn-primary" href="Controlador/controladorPersona2.php?id_persona=<?= $valor['id_persona']?>&metodo=delete">Eliminar</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <div class="btn-group " role="group" aria-label="Basic example">
                  <a class="button btn btn-primary" href="Vista/vistaAgregar.php">Agrega Persona</a>
            </div>
        <?php endif; ?>
    </div>


</body>
</html>
 