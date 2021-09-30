<?php
require_once 'Pessoa.php';
class Professor extends Pessoa
{
    private $materia;
    private $salario;

    //Metodos
    function aumentar($aum)
    {
        $this->salario+= $aum;
    }

    //setters
    function setMateria($m)
    {
        $this->materia=$m;
    }
    function setSalario($s)
    {
        $this->salario=$s;
    }
   

    //getters
    function getMateria()
    {
        return $this->materia;
    }
    function getSalario()
    {
        return $this->salario;
    }
}
?>