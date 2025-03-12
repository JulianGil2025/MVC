<?php
require_once("../Modelo/modelo_persona.php");



if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    modelo_persona::agregarDato($_POST);
    header("Location: http://localhost/mvc/index.php");
  }
?>