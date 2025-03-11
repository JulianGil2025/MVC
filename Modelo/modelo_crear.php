<?php
class modelo_crear{

private $nombre;
private $apellido_paterno;
private $apellido_materno;
private $edad;
private $correo;

public function __construct( $nombre, $apellido_paterno, $apellido_materno, $edad, $correo)
{

$this->nombre = $nombre;
$this->apellido_paterno = $apellido_paterno;
$this->apellido_paterno = $apellido_materno;
$this->edad = $edad;
$this->correo = $correo;
}

public function getnombre() {
  return $this->nombre;
}
public function getapellido_Paterno() {
  return $this->apellido_paterno;
}
public function getapellido_Materno() {
  return $this->apellido_materno;
}
public function getedad() {
  return $this->edad;
}
public function getcorreo() {
  return $this->correo;
}

public static function agregarDato($conexion, $nombre, $apellido_paterno, $apellido_materno, $edad, $correo) {
  $insertar  = "INSERT INTO `datos` (`id_persona`, `nombre`, `apellido_paterno`, `apellido_materno`, `edad`, `correo`)  
  VALUES (NULL,'$nombre','$apellido_paterno','$apellido_materno',$edad,'$correo');";
   $conexion->query($insertar); 
}

}

    ?>


  