<?php
require_once 'Animal.php';
class Peixe extends Animal
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
        echo "<p>Peixes comem algas....";       
    }
    function mover()
    {
        echo "<p> A nadar....";
    }
    function fazerSom()
    {
        echo "<p> sem som !!!";
    }
    function bolha()
    {
        echo "<p> Glup glup ...";
    }
}

?>