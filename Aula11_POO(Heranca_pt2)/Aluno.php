<?php
require_once 'Pessoa.php';
/*final*/ class Aluno extends Pessoa        //Class Bolsista may not inherit from final class (Aluno)
{
    private $matri;
    private $curso;

    //Metodos
    /*final*/ function  pagarMensal()       //Cannot override final method Aluno::pagarMensal() 
    {
        echo "<p>Matricula Paga de $this->nome";
        echo "<br>";
    }

    //setters
    function setMat($m)
    {
        $this->matri=$m;
    }
    function setCurso($c)
    {
        $this->curso=$c;
    }
   

    //getters
    function getMatri()
    {
        return $this->matri;
    }
    function getCurso()
    {
        return $this->curso;
    }
}
?>