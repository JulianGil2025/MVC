<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuardarRegitro</title>
</head>
<body>

<h2>Ingresa todos los Datos</h2>
<form action="../Modelo/modelo_crear.php"  method="post">
  Nombre: <input type="text" name="nombre"><br>
  Apellido Paterno: <input type="text" name="apellido_Paterno"><br>
  Apellido Materno: <input type="text" name="apellido_Materno"><br>
  Edad: <input type="number" name="edad"><br>
  Correo Eletrico: <input type="email" name="correo">
  <input type="submit">
</form>
</body>
</html>