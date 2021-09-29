<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa
{
    private $matri;
    private $curso;

    //Metodos
    function cancelarMat()
    {
        echo "<p>Matricula Cancelada";
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