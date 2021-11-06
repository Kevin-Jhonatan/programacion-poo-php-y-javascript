<?php
    // OJO que nos es una buena practica usar los echos para mostrar
    // y solo lo usariamos para hacer pruebas y si deceamos mostrar algo 
    // usariamos print para imprimir en pantalla
    class Telefono{
        public $marca;
        public $modelo;
        // recordar que usamos protected para que las clases que hereden 
        // puedan acceder a estos atributos y tampoco usamos static por que si va 
        // a cambiar y no sera static
        protected $alambrico = true;
        protected $comunicacion;

        public function __construct($marca, $modelo){
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->comunicacion = ($this->alambrico)? 'Alambrico' : 'Inhalambrico';
        }
        public function llamar(){
            $tono = "<p>Rinn Rinn Rinn Rinn Rinn</p>";
            // para retornar un string no podemos usar el echo
            // lo ideal es retornar Ring Ring en una variable
            // o por ultimo usar el print
            echo $this->marca;
            return $tono;
        }
        public function masInfo(){
            $mostrar = "<ul>
                <li>Marca: <b><mark>".$this->marca."</mark></b></li>
                <li>Modelo: <b><mark>".$this->modelo."</mark></b></li>
                <li>Comunicacion: <b><mark>".$this->comunicacion."</mark></b></li>
                <a href='http://poo-php.com/PHP/PHP_POO/index.php'>Sigueme en Facebook</a>
            </ul>";
            return $mostrar;
        }
        public function __destruct(){
            
        }
    }

    class Celular extends Telefono{
        protected $alambrico = false;
        
        public function __construct($marca, $modelo){
            $this->marca = $marca;
            $this->modelo = $modelo;
        }
        public function saludar(){
            print("<mark><h1>Hola Buenas tardes te ofresco un celular</br>Marca: 
            $this->marca </br>Modelo: $this->modelo</h1></mark>");
        }
        public function __destruct(){

        }
    }

    // usamos esta clase final cuando ya no deceamos que se siga heredando
    // y seria la ultima clase heredada (SmarthPhone)
    class SmarthPhone extends Celular{
    }





    $telefonoCasa = new Telefono('Samsung', 'S20-Ultra');
    echo "<h1>Evolución del Teléfono</h1>";
    echo "<h2>Teléfono</h2>";
    print "<b>".$telefonoCasa->masInfo()."</b>";
    print ("<b>". $telefonoCasa->llamar()."</b>");
    $celular = new Celular('Nokia', 'N-7000');
    print ($celular->saludar());
?>