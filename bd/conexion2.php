<?php
class conexion {
    private $host;
    private $usuario;
    private $contraseña;
    private $basedatos;
  
    public function __construct() {
      $this->host = 'localhost';
      $this->usuario = 'julian';
      $this->contraseña = '123456';
      $this->basedatos = 'personas';
    }
  
    public function query($query) {
      $conexion = mysqli_connect($this->host, $this->usuario, $this->contraseña, $this->basedatos);
      $resultado = mysqli_query($conexion, $query);
      mysqli_close($conexion);
      return $resultado;
    }

}

?>