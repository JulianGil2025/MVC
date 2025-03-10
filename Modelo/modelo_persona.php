<?php


class modelo_persona{
    

    public function datos_Persona(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $apellido_Paterno = $_POST["apellido_Paterno"];
            $apellido_Materno = $_POST["apellido_Materno"];
            $edad = $_POST["edad"];
            $correo = $_POST["correo"];


            echo "<br>Aqui van los datos modelo";
             echo "<br> Nombre  ",$nombre;
             echo "<br>apellido_Paterno  ",$apellido_Paterno;
             echo "<br> apellido_Materno  ",$apellido_Materno;
             echo "<br>  EDAD ",$edad;
             echo "<br> correo ",$correo;

        }else{
            echo "Sin datos enviados";
        }
       
         
    }

}

?>
