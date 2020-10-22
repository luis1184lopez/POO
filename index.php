<?php
class Mascota {
    //Atributos
    public $nombre="Firulais";
    public $edad= 0;
    //Métodos
    public function calcularedad($edad){
        echo "Su mascota tiene ". $edad * 7 . " años en edad canina"; 
    }
}
$mascota= new Mascota();
$mascota->calcularedad(7);

?>
