<?php
require_once 'Animal.php';
class Ave extends Animal
{
    private $corPena;

    function getCorPena() 
    {
        return $this->corPena;
    }

    function setCorPena($corPena)
     {
        $this->corPena = $corPena;
    }

    

    function comer()        //implementação dos metodos abstratos declarados na super classe Animal
    {                       //metodos sobrepostos
        echo "<p>Aves comem frutas....";       
    }
    function mover()
    {
        echo "<p> A voar....";
    }
    function fazerSom()
    {
        echo "<p> braaaaaaa!!!";
    }
    function fazerNinho()
    {
        echo "<p>A construir o ninho ...";
    }
}

?>