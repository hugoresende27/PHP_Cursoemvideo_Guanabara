<?php
require_once 'Aluno.php';

class Bolsista extends Aluno
{
    private $bolsa;
    public function renovarBolsa()
    {
        echo "Bolsa renovada do aluno ".$this->getNome();
    }

    function pagarMensal()      //metodo sobreposto, basta usar a mesma chamada, ele sobrepõe
    {
        echo "<p>Matricula Paga de <strong>$this->nome BOLSISTA</strong>";
        echo "<br>";
    }

    //getter e setter da bolsa
    function getBolsa()
    {
        return $this->bolsa;
    } 
    function setBolsa($b)
    {
        $this->bolsa=$b;
    }
}



?>