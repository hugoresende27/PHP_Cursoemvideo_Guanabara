<?php

abstract class Pessoa           //classe abstracta, não permite instanciar objetos
{
    protected $nome;        //se estiver protected em vez de private vai me permitir aceder aos atributos diretamente
    protected $idade;       //se estiver private apenas posso aceder ao metodos para setNome, setIdade, setSexo
    protected $sexo;
    //metodos
    public final function fazerAno()        //função final, não pode ser sobrescrita
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