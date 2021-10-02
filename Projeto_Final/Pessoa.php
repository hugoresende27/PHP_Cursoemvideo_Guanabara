<?php

abstract class Pessoa       //classe abstracta, não pode ser instanciada
{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $exp;


    //contructor
    function __construct($nome,$idade,$sexo)
    {
        $this->nome=$nome;
        $this->idade=$idade;
        $this->sexo=$sexo;
        $this->exp=0;
    }

    //
    protected function ganharExp($n)
    {
        $this->exp += $n;
    }
    //getter e setters
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getExp() {
        return $this->exp;
    }

    public function setExp($exp) {
        $this->exp = $exp;
    }

}