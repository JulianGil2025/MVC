<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuardarRegitro</title>
</head>
<body>

<h2>Ingresa todos los Datos</h2>
<form action="../Controlador/controlador_crear.php"  method="post">
<table class="table">
<tr class="table-primary">
                    <th class= "table-primary">Nombre</th>
                    <th class= "table-primary">Apellido Paterno</th>
                    <th class= "table-primary">Apellido Materno</th>
                    <th class= "table-primary">Edad</th>
                    <th class= "table-primary">Correo</th>
</tr>
<tr>
<td> <input type="text" name="nombre"></td>
<td> <input type="text" name="apellido_Paterno"></td>
<td> <input type="text" name="apellido_Materno"></td>
<td> <input type="number" name="edad"></td>
<td> <input type="email" name="correo"></td>
  </tr>
  </table>
  <a class="button btn btn-primary" href="\MVC\index.php">Regresar</a>
  <input class="button btn btn-primary" type="submit" value="Guardar Datos ">
</form>
</body>
</html>