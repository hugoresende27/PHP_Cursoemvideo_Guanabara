<?php
require_once 'Animal.php';
class Mamifero extends Animal
{
    private $corPelo;

    function getCorPelo() 
    {
        return $this->corPelo;
    }

    function setCorPelo($corPelo)
     {
        $this->corPelo = $corPelo;
    }

    

    function comer()        //implementação dos metodos abstratos declarados na super classe Animal
    {
        echo "<p>Mamiferos para comer mamam....";
    }
    function mover()
    {
        echo "<p> A correr....";
    }
    function fazerSom()
    {
        echo "<p> Rugir !!!";
    }
}

?>