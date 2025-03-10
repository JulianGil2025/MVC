<?php

require_once("Modelo/modelo_datos.php");
$per=new modelo_datos();
$datos=$per->obtener_datos();



$perso= new modelo_datos();
$datos_per=$perso->obtener_datos_mas();

require_once("Vista/vista.php");

  ?>
 