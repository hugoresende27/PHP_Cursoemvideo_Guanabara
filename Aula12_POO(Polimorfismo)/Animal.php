<?php

abstract class Animal           //classe animal é abstracta 
{
    protected $peso;
    protected $idade;
    protected $membros;
    
    abstract function mover();  //metodos abstractos
    abstract function comer();  //metodos sobrepostos, em cada classe existem os metodos com a mesma assinatura mas funções diferentes
    abstract function fazerSom();

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
