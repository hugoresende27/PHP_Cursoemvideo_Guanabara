<?php

class Pessoa
{
    private $nome;
    private $idade;
    private $sexo;

    public function fazerAnos()
    {
        $this->idade++; //incrementa +1 a idade
    }

    //construtor
    function __construct($nom,$ida,$sex)
    {
        $this->nome =$nom ;
        $this->idade=$ida ;
        $this->sexo =$sex ;       
    }

    //getters e setters
    function getNome()
    {
        return $this->nome;
    }
    function getIdade()
    {
        return $this->idade;
    }
    function getSexo()
    {
        return $this->sexo;
    }

    function setNome($n)
    {
        $this->nome=$n;
    }
    function setIdade($i)
    {
        $this->idade=$i;
    }
    function setSexo($s)
    {
        $this->sexo=$s;
    }
}

?>