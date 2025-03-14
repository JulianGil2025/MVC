  <?php
require_once "Modelo/modelo_persona.php";
$conexion = new modelo_persona();
$datos = $conexion->obtener_datos();
$conexion->guardar_datos($_REQUEST);

  ?>
<!DOCTYPE html>
<html lang="esp-mx">
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
            background-color: rgba(7, 7, 7, 0.5);
        }

        /* Contenedor del formulario */
        .modal-contenido {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #ccc;
            width: 500px;
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
     <button class="button btn btn-primary"  onclick="formularioAgregar()" >Agregar un Datos</button>
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
                    <td ><a class="button btn btn-primary" onclick="formularioModificar()" href="#modificarDatos?id_persona=<?= $registro['id_persona'] ?>" id_persona="<?= $registro['id'] ?>">Modificar1</a></td>
                    <td ><a class="button btn btn-primary" onclick="formularioeliminar()"  href="#eliminarDato?id_persona=<?=$valor['id_persona'] ?>">Eliminar</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <div class="btn-group " role="group" aria-label="Basic example"> 
     <button class="button btn btn-primary"  onclick="formularioAgregar()" >Agregar un Datos</button>
      </div>
        <?php endif; ?>
        
    </div>
 
<div id="agregarDatos" class="modal">
    <div class="modal-contenido">
        <span class="cerrar" onclick="cerrarFormularioAgregar()">&times;</span>
        <form action="Controlador/controlador_crear.php"  method="post">
            <tr> 
             <td ><h2>Ingresa los Datos </h2> </td>
             </tr>

<table class="table">                  
<tr class="table-primary">  
<td class= "table-primary" >  <input type="text" name="nombre" placeholder="Nombre"></td>
</tr>
<tr class="table-primary">  
<td class= "table-primary"  >  <input type="text" name="apellido_Paterno" placeholder="Apellido Paterno"></td>
</tr>
<tr class="table-primary">  
<td class= "table-primary" >  <input type="text" name="apellido_Materno" placeholder="Apellido Materno"> </td>
</tr>
<tr class="table-primary">  
<td class= "table-primary"><input type="number" name="edad" placeholder="Edad"></td>
</tr>
<tr class="table-primary">  
<td class= "table-primary" ><input type="email" name="correo" placeholder="Correo"></td>
  </tr>
  </table>
  <a class="button btn btn-primary" onclick="cerrarFormularioAgregar()">Regresar</a>
  <input class="button btn btn-primary" type="submit" value="Guardar Datos ">
</form>
        </form>
    </div>
</div>


<script>
    function formularioAgregar() {
        document.getElementById("agregarDatos").style.display = "block";
    }

    function cerrarFormularioAgregar() {
        document.getElementById("agregarDatos").style.display = "none";
    }
    window.onclick = function(event) {
        var modal = document.getElementById("agregarDatos");
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }    
</script>


<div id="eliminarDato" class="modal">
    <div class="modal-contenido">
        <span class="cerrar" onclick="cerrarFormularioEliminar()">&times;</span>

<p>Confirma el datos para eliminar</p> 


   <form method="POST" action="Controlador/Controlador_eliminar.php">
   <table class="table">
   <tr class="table-primary">
                    <th class= "table-primary">ID Persona</th>
                    <th class= "table-primary">Nombre</th>
                    </tr>

                    <tr class="table-primary">
                  
               <td><input value="<?=$valor['id_persona'] ?>" name="id_persona"></td>
                <td><input type="text" name="nombre" value=<?php echo $valor['nombre']?>></td>   
                </tr> 
                <tr class="table-primary">      
               <td> <a class="button btn btn-primary" onclick="cerrarFormularioEliminar()" >Regresar</a></td>
               <td> <button class="btn btn-primary" type="submit" >Eliminar</button></td>
                    </tr>
        </form>
</table>
    </div>
</div>


<script>
  function formularioeliminar() {
        document.getElementById("eliminarDato").style.display = "block";
    }
    function cerrarFormularioEliminar() {
        document.getElementById("eliminarDato").style.display = "none";
    }
    window.onclick = function(event) {
        var modal = document.getElementById("eliminarDato");
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }   
 </script>


<div id="modificarDatos" class="modal">
    <div class="modal-contenido">
        <span class="cerrar" onclick="cerrarFormularioModoficar()">&times;</span>
        <?php

    echo "". $valor['id_persona'];
?>

<p>Datos a Actulizar</p> 
<form method="post" action="\MVC\index.php">
   


            <table class="table">
            
    
              <tr class="table-primary">                    
                </tr>
            
                    <tr>
                    <th class= "table-primary">ID</th>
                    <td><input type="text" readonly name="id_persona" value=<?php echo $valor['id_persona']?>></td>
                    </tr>
                    <tr>  
                    <th class= "table-primary">Nombre</th>
                    <td><input type="text" name="nombre" value=<?php echo $valor['nombre']?>></td>
                    </tr>
                    <tr> 
                    <th class= "table-primary">Apellido Paterno</th>
                    <td><input type="text" name="apellido_paterno" value=<?php echo $valor['apellido_paterno'] ?>></td>
                    </tr>
                    <tr> 
                    <th class= "table-primary">Apellido Materno</th>
                    <td><input type="text" name="apellido_materno" value=<?php echo $valor['apellido_materno'] ?>></td>
                    </tr>

                    <tr> 
                    <th class= "table-primary">Edad</th>
                    <td><input type="text" name="edad" value=<?php echo $valor['edad']  ?>></td>
                    </tr>
                    <tr> 
                    <th class= "table-primary">Correo</th>
                    <td><input type="text" name="correo" value=<?php echo $valor['correo']  ?>></td>
                    </tr>
            </table>
            <div>
                <a class="button btn btn-primary" onclick="cerrarFormularioModoficar()" >Regresar</a>
                <button class="btn btn-primary" type="submit" >Guardar</button>
                
            </div>
            </form>
    </div>
</div>

<script>
  function formularioModificar() {
        document.getElementById("modificarDatos").style.display = "block";
    }
    function cerrarFormularioModoficar() {
        document.getElementById("modificarDatos").style.display = "none";
    }
    window.onclick = function(event) {
        var modal = document.getElementById("modificarDatos");
        if (event.target === modal) {
            modal.style.display = "none";
        }
    } 




 </script>


</body>
</html>
 