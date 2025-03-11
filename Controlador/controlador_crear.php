<?php
require_once("../Modelo/modelo_crear.php");
require_once("../bd/conexion.php");

$conexion = new conexion();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
        $apellido_Paterno = $_POST["apellido_Paterno"];
        $apellido_Materno = $_POST["apellido_Materno"];
        $edad = $_POST["edad"];
        $correo = $_POST["correo"];
    modelo_crear::agregarDato($conexion, $nombre, $apellido_Paterno, $apellido_Materno, $edad, $correo);
    header("Location: http://localhost/mvc");
  }
?>