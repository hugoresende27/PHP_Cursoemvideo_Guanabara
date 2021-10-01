<?php
require_once 'Animal.php';
class Reptil extends Animal
{
    private $corEscama;

    function getCorEscama() 
    {
        return $this->corEscama;
    }

    function setCorEscama($corEscama)
     {
        $this->corEscama = $corEscama;
    }

    

    function comer()        //implementação dos metodos abstratos declarados na super classe Animal
    {                       //metodos sobrepostos
        echo "<p>Repteis comem vegetais....";       
    }
    function mover()
    {
        echo "<p> A rastejar....";
    }
    function fazerSom()
    {
        echo "<p> tsssssssssss !!!";
    }
}

?>