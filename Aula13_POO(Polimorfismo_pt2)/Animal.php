<?php

abstract class Animal           //classe animal é abstracta 
{
    protected $peso;
    protected $idade;
    protected $membros;
    
    public abstract function som();

//getters e setters
    function getPeso()
    {
        return $this->peso;
    }

    function setPeso($p)
    {
        $this->peso = $p;
    }

    function getIdade() {
        return $this->idade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function getMembros() {
        return $this->membros;
    }

    function setMembros($membros) {
        $this->membros = $membros;
    }

}

?>