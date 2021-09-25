<?php
class Caneta
{
    public $modelo;         //intanciar atributo modelo visibilidade publico
    private $ponta;         //intanciar atributo ponta visibilidade privado
    private $tapada;
    private $cor;

    public function __construct()       //metodo contrutor
    {
        $this->cor="Azul";
        $this->ponta=10;
        $this->modelo="RANDOM";
        $this->tapar();
    }

  /*  public function __construct($m,$p,$c)     //outro metodo contrutor com passagem de parametros
    {
        $this->modelo=$m;
        //$this->setModelo($m);     //posso tbm usar o metodo set para passar os parametro dentro deste metodo contrutor
        $this->ponta=$p;
        $this->cor=$c;
        $this->tapar();
    }*/

    public function tapar(){
        $this->tapada=true;
    }

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