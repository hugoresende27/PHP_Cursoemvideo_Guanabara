<?php
require_once'Lutador.php';
class Luta
{
    //atributos
    private $lutadorA;
    private $lutadorB;
    private $rounds;
    private $aprovado;

    //metodos publicos
    public function marcarLuta($l1,$l2)
    {
        if ($l1.getCategoria() == $l2.getCategoria() && ($l1!=$l2))
        {
            $this->aprovado=true;
            $this->lutadorA=($l1);
            $this->lutadorB=($l2);
        }
        else
        {
            $this->aprovado=false;
            $this->lutadorA=null;
            $this->lutadorB=null;
        }

    }
    public function lutar()
    {
        if (getAprovado())
        {
            $lutadorA.apresentar();
            $lutadorB.apresentar();
        }

    }

    //metodos getters e setters
    function getlutadorA()
    {
        return $this->lutadorA;
    }
    function getlutadorB()
    {
        return $this->lutadorB;
    }
    function getRounds()
    {
        return $this->rounds;
    }
    function getAprovado()
    {
        return $this->aprovado;
    }
    function setlutadorA($l1)
    {
        $this->lutadorA=$l1;
    }
    function setlutadorB($l2)
    {
        $this->lutadorB=$l2;
    }
    function setRounds($r)
    {
        $this->rounds=$r;
    }
    function setAprovado($a)
    {
        $this->aprovado=$a;
    }




}


?>