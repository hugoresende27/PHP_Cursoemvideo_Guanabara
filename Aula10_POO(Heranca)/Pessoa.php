<?php

class Pessoa
{
    private $nome;
    private $idade;
    private $sexo;
    //metodos
    public function fazerAno()
    {
        $this->idade++;                 //adiciona 1 ano de idade a idade
    }

    //setters
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

    //getters
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
}


?>