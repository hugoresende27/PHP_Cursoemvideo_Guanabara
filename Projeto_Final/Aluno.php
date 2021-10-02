<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa      //extende a classe abstracta
{
    private $login;
    private $total;

    function __construct($nome,$idade,$sexo,$login)
    {
        parent::__construct($nome,$idade,$sexo);//usa o construtor da superclasse Pessoa 
        $this->login=$login;
        $this->total=0;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

    public function viuMaisUm()
    {
        $this->total++;
    }


}