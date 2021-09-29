<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa
{
    private $setor;
    private $trabalhar;

    //Metodos
    function mudar()
    {
        $this->trabalhar != $this->trabalhar;
    }

    //setters
    function setSetor($s)
    {
        $this->setor=$s;
    }
    function setTrabalhar($t)
    {
        $this->trabalhar=$t;
    }
   

    //getters
    function getSetor()
    {
        return $this->setor;
    }
    function getTrabalhar()
    {
        return $this->trabalhar;
    }
}
?>