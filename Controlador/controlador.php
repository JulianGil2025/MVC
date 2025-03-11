<?php

require_once("Modelo/modelo_datos.php");
$per=new modelo_datos();
$datos=$per->obtener_datos();


$agregado= new modelo_datos();

require_once("Vista/vista.php");

  ?>
 