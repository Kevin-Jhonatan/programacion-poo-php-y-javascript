<?php
    class Persona{
        public static $nombre;
        public static $apellido;
        public $edad;
        public $profesion;
        public $hijos;
        public $mascotas;
        private $contraseña;
        private $numeroDeCuentas;
        private $cantidadDeDinero;
        private $usuario;

        public function __construct($nombre, $apellido, $edad, $profesion, $hijos, $mascotas, $contraseña, $numeroDeCuentas, $cantidadDeDinero, $usuario){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->edad = $edad;
            $this->profesion = $profesion;
            $this->hijos = ($hijos)? 'Hijos' : 'Ningun Hijo';
            $this->mascotas = ($mascotas)? 'Un perro':'Ninguna mascota';
            $this->contraseña = $contraseña;
            $this->numeroDeCuentas = $numeroDeCuentas;
            $this->cantidadDeDinero = $cantidadDeDinero;
            $this->usuario = $usuario;
        }
        private function autentificacion(){
            $usuario;
            $contraseña;
            $numeroDeCuentas;
            $cantidadDeDinero;
            if($this->$usuario === $usuario){
                echo "<center><p><mark>Felicidades $this->nombre Ingreso correctamente!!</br></mark></p></center>";
                echo "<h1>Nombre : </h1><center><p><mark>$this->usuario</mark></p></center>"."<h1>Nº de Cuenta : </h1><center><p><mark>$this->numeroDeCuentas</mark></p></center>";
                echo "<h1>Efectivo : </h1><center><p><mark>$this->cantidadDeDinero</mark></p></center>";
            }else {
                echo "<p><mark>Contraseña incorrecta recuerde que solo tiene 3 intentos</mark></p>";
            }
        }
        
        public function presentacion(){
            echo "Hola, soy ".$this->nombre . $this->apellido."</br>";
            echo " tengo $this->edad"." años".", soy $this->profesion"."</br>";
            echo "no tengo $this->hijos"."</br>";
            echo "y tengo $this->mascotas"."</br>";
            echo $this->autentificacion();
        }
        public function __destruct(){
            echo "Aqui se destruye la clase!!!";
        }
    }
    $info = new Persona('Kevin ', 'Mamani Mollo', 21, 'Estudiante', false,
    true, '(kevin1999)', '12491877', 12720, 'kevin');
    print $info->presentacion();
    print $info->edad." años</br>";
    print ("Hola mundo!! soy un print   </br>");
?>  