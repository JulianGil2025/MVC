<?php
require_once("../Modelo/modelo_persona.php");
require_once("../bd/conexion.php");

$conexion = new conexion();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_persona = $_POST["id_persona"];
   
    modelo_persona::eliminardato($conexion, $id_persona);
    header("Location: http://localhost/mvc/index.php");
  }
?>