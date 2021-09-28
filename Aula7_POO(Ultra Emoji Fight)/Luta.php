<?php
require_once'Lutador.php';      //importar os metodos de Lutador.php
class Luta
{
    //atributos
    private $lutadorA;
    private $lutadorB;
    private $rounds;
    private $aprovado;


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

    //metodos publicos
    public function marcarLuta($l1,$l2)
    {
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1!=$l2))     //getCategoria vem de Lutador.php
        {                           //teste === para saber se é igual e do mesmo tipo, == seria teste de idêntico
            $this->aprovado=true;
            $this->lutadorA=($l1);
            $this->lutadorB=($l2);
        }
        else
        {
            echo "<p>Luta NÃO APROVADA!</p>";
            $this->aprovado=false;
            $this->lutadorA=null;
            $this->lutadorB=null;
        }

    }
    public function lutar()
    {
        if ($this->getAprovado())
        {
            $this->lutadorA->apresentar();
            $this->lutadorB->apresentar();
            $vencedor = rand (0,2);
            switch ($vencedor)
            {
                case 0: //empate
                    echo "<p>EMPATE";
                    $this->lutadorA->empatarLuta();
                    $this->lutadorB->empatarLuta();
                    $this->lutadorA->setEmpates(1);
                    $this->lutadorB->setEmpates(1);
                    break;
                case 1: //vence A
                    echo "<p>VITORIA DE ::".$this->lutadorA->status();
                    $this->lutadorA->ganharLuta();
                    $this->lutadorB->perderLuta();
                    $this->lutadorA->setVitorias(1);
                    $this->lutadorB->setDerrotas(1);
                    break;
                case 2: //vence B
                    echo "<p>VITORIA DE ::".$this->lutadorB->status();
                    $this->lutadorB->ganharLuta();
                    $this->lutadorA->perderLuta();
                    $this->lutadorB->setVitorias(1);
                    $this->lutadorA->setDerrotas(1);
                    break;
            }
        }

    }

}


?>