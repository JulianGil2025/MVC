<?php 
require_once("../bd/conexion2.php");
require_once('../Modelo/modelo_persona2.php');

      if ($_SERVER["REQUEST_METHOD"] == "POST" && $_REQUEST['metodo']== 'modify') {
            $persona = new modelo_persona();
            $persona->guardar_datos($_REQUEST);
            header("Location: http://localhost:8080/mvc/index2.php");

      }elseif ($_SERVER["REQUEST_METHOD"] == "POST" && $_REQUEST['metodo']== 'add') {
        modelo_persona::agregarDato($_REQUEST);
        header("Location: http://localhost:8080/mvc/index2.php");


      }elseif($_SERVER["REQUEST_METHOD"] == "GET" && $_REQUEST['metodo']== 'delete') {
        modelo_persona::eliminardato($_REQUEST);
        header("Location: http://localhost:8080/mvc/index2.php");


      }
    ?>