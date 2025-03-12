  <?php
require_once "Modelo/modelo_persona.php";
$conexion = new modelo_persona();
$datos = $conexion->obtener_datos();
$conexion->guardar_datos($_REQUEST);

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

  <style>
        /* Estilos del fondo oscuro */
        .modal {
            display: none; /* Oculto por defecto */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        /* Contenedor del formulario */
        .modal-contenido {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #ccc;
            width: 300px;
            position: relative;
            text-align: center;
        }

        /* Botón para cerrar */
        .cerrar {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>

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
                    <td ><a class="button btn btn-primary" href="Vista/vistaModificar.php?id_persona=<?= $valor['id_persona'] ?>">Modificar</a></td>
                    <td ><a class="button btn btn-primary" href="Vista/vistaEliminar.php?id_persona=<?= $valor['id_persona'] ?>">Eliminar</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <div class="btn-group " role="group" aria-label="Basic example">
                  <a class="button btn btn-primary" href="Vista/vistaAgregar.php">Agrega Persona</a>
            </div>
        <?php endif; ?>
    </div>

    <button onclick="mostrarModal()">Agregar un Datos</button>

  
<div id="miModal" class="modal">
    <div class="modal-contenido">
        <span class="cerrar" onclick="cerrarModal()">&times;</span>
        <h1>Insertar datos</h1>
        <form action="controller.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre"><br><br>

            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos"><br><br>

            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad"><br><br>

            <input type="submit" value="Insertar">
        </form>
    </div>
</div>




<script>
    function mostrarModal() {
        document.getElementById("miModal").style.display = "block";
    }

    function cerrarModal() {
        document.getElementById("miModal").style.display = "none";
    }
    window.onclick = function(event) {
        var modal = document.getElementById("miModal");
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>
 