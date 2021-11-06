<?php
  class Perro{
      // atributos y metodos
      // OJO los archivos que contengan una clase se deben llamar igual que la Clase
      /* 
        Modificadores de acceso : 
        public --> Acceso total de cualquier lugar
        private --> solo con acceso dentro la clase
        protected --> Acceso solo desde los metodos de la 
        clase y subclases que la hereden, los objetos no 
        los pueden invocar
      */
      public $nombre;
      public static $raza;
      public $edad;
      public $sexo;
      public $adiestrado;
      public $foto;
      public $comida;
      private $pulgas;
      public static $mejorAmigo = '</br>Hombre';
      const MEJOR_CUALIDAD = 'Fidelidad';
       /* 
       metodos especiales __construct --> se ejecuta automaticamente al inicio
       de instancias una clase, __destruct --> se ejecuta automaticamente al final
       de instanciar la clase
       */
      public function __construct($nombre, $raza, $edad, $sexo, $adiestrado, $foto, $pulgas){
          $this->nombre = $nombre;
          // ojo que las comillas simples y dobles si afectan en PHP
          // si usamos simples no podremos poner variables dentro el texto 
          // si usamos dobles si podra leer las variables detro el texto
          $this->raza = $raza;
          $this->edad = $edad . " años";
          // usaremos el operador ternario que hace referencia a una condicional if en una linea de codigo
          $this->sexo = ($sexo)? 'Hembra' : 'Macho';
          $this->adiestrado = ($adiestrado)? 'Adiestrado' : 'No adiestrado';
          $this->foto = $foto;
          echo "<h1 style=color:blue;>Hi I am construct of the clase Perro!!!</br>Siempre soy el primero en ejecutarme este donde este</h1>";
          $this->pulgas = $pulgas;
        }
      public function __destruct(){
        echo "<h1 style=color:blue;>Bye!! Hi I am destruct of the class Perro!!</br>Siempre soy el ultimo en ejecutarme este donde este</h1>";
      }
      // metodos normales referenciados a la clase
      public function ladrar(){
        echo "<p><mark>Guaou Guaou Guaou!!</mark></p>";
      }
      public function comer($comida){
        $this->comida = $comida;
        echo "<p>".$this->nombre. ' come '. $this->comida."</p>";
      }
      public function aparecer(){
        // ojo que aqui estamos dentro de la clase y no podemos usar el objeto
        // esta mas esta forma --> echo '</br><img src="'. $raiza->foto.'">';<--
        echo '<mark>La foto de mi perro es :</mark></br><img src="'. $this->foto.'">';
      }
      // accediendo a un atributo privado con este metodo publico
      public function tienePulgas(){
        echo ($this->pulgas) ? '<p>Si tiene pulgas ;-(</p>' : '<p>No tiene pulgas:-)</p>';
      }
      private function saludar(){
        echo "<h1 style=color:red;>hola mundo soy un metodo privado</h1>";
      }
      public function infoPerros(){
        // se puede usar esta forma self o $this
        self::ladrar();
        // esta es la manera de acceder a un metodo privado
        $this->saludar();
        Perro::comer('Chancho');
        //Perro::$raza; --> esto no daria
        // con esto si llego a mostra a un atributo statico
        echo $this->raza;
        // esta es la forma que nos recomiendan para acceder a un atributo static
        echo Perro::$mejorAmigo;
        // es la forma de llamar a una constante
        echo "</br>La mejor cualidad del perro es su : ".self::MEJOR_CUALIDAD;
      }
  }
  // instanciamos una clase para que sea un objeto
  $raiza = new Perro('Raiza', 'Grandanes', 12, true, true, 'http://poo-php.com/PHP/PHP_POO/001_POO_PHP/me.jpeg', true);
  // esto no sirve para mostrar si esta llegando el dato del objeto raiza -> echo $raiza;
  //var_dump($raiza); // esta nos ayudaria a ver si llega los datos del objeto
  echo "<h1>". "Mi perro se llama $raiza->nombre". "</br>es de raza : $raiza->raza". "</br>tiene : $raiza->edad"
  . "</br>es : $raiza->sexo". "</br>tambien esta : $raiza->adiestrado";
  // con esto accedemos y ejecutamos una metodo dentro una clase
  echo $raiza->ladrar();
  echo $raiza->comer('croquetas');
  echo $raiza->comer('pollo');
  echo $raiza->aparecer();
  echo $raiza->tienePulgas();
  echo $raiza->infoPerros();
?>