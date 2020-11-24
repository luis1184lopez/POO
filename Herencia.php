<?php

class Animal{
    // Atributos
    public $peso;
    public $color;
    public $especie;
    //Métodos
    public function comer(){
        echo "Deliciosa comida";
    } 
    public function dormir(){
        echo "Zzzz...zzz";
    }
    public function despetarse(){
        echo "Despierten";
    }
    public function moverse(){
        echo "Voy caminando";
    }
}
// Primera clase derivada de Animal
class Mamifero extends Animal{

}
// Primera clase derivada de Mamifero
class Gato extends Mamifero{
    //Atributos
    public $nombre;
    public $raza;
    public $color;
    //Metodos
    public function setDatos($nombre,$raza,$color){
        $this->nombre = $nombre;
        $this->raza = $raza;
        $this->color = $color;
}
public function getDatos(){
   echo "<strong>","Nombre      " , "Raza      " , "Color" ,"</strong>"; echo "<br>";
   echo $this->nombre,"    ", $this->raza,"    ", $this->color;
}
    public function maullar(){
        echo "Miau";
}
}
// Segunda clase derivada de Mamifero
class Perro extends Mamifero{
   //Atributos
   public $nombre;
   public $raza;
   public $color;
   //Metodos
   public function ladrar(){
       echo "Guau";
}
}
// Tercera clase derivada de Mamifero
class Raton extends Mamifero{
   //Atributos
   public $nombre;
   public $raza;
   public $color;
   //Metodos
   public function chillar(){
       echo "Chirriiiiiii";
}
}
// Segunda clase derivada de Animal
class Peces extends Animal{

}
// Primera clase derivada de Peces
class Salmon extends Peces{

}
// Segunda clase derivada de Peces
class Tiburon extends Peces{

}
// Tercera clase derivada de Peces
class Piraña extends Peces{

}
// Tercera clase derivada de Animal
class Reptil extends Animal{

}

$michi = new Gato();
$michi-> setDatos("Minino","Siames","Blanco");
$michi->getDatos();
?>
