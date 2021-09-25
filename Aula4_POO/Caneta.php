<?php
class Caneta
{
    public $modelo;         //intanciar atributo modelo visibilidade publico
    private $ponta;         //intanciar atributo ponta visibilidade privado

    public function getModelo(){        //metodo para obter o modelo, simples return de modelo
        return $this->modelo;           //uso $this-> para chamar todo o objeto
    }
    public function setModelo($m){      //metodo para definir, alterar o modelo, objeto todo $this->modelo 
        $this->modelo=$m;               //recebe o parametro passado à funcao ($m)
    }

    public function getPonta(){         //para cada atributo preciso de 2 metodos , um getter e um setter
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta=$p;
    }
}