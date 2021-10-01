<?php
require_once 'Animal.php';
class Mamifero extends Animal
{
    protected $corPelo;

    function som()
    {
        echo "<p>Som de mamifero";
    }

}

?>