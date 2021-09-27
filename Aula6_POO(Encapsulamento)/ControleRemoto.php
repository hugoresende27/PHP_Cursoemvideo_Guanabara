<?php
require_once'Controlador.php';
class ControloRemoto implements Controlador{
    //atributos
    private $volume;
    private $ligado;
    private $tocar;

    //metodos especiais
    public function __construct()
    {
        $this->volume=50;
        $this->ligado=false;
        $this->tocar=false;
    }

    //getters e setters
    private function getVolume()
    {
        return $this->volume;
    }
    private function getLigado()
    {
        return $this->ligado;
    }
    private function getTocar()
    {
        return $this->tocar;
    }
    private function setVolume ($vol)
    {
        $this->volume=$vol;
    }
    private function setLigado($lig)
    {
        $this->ligado=$lig;
    }
    private function setTocar($toc)
    {
        $this->tocar=$toc;
    }

    //metodos abstratos
    public function ligar()
    {
        $this->setLigado(true);

    }
    public function desligar()
    {
        $this->setLigado(false);
    }
    public function abrirMenu()
    {
        echo "------ MENU -----";
        echo "<br>Está ligado? ". ($this->getLigado()?"SIM":"NÃO");     //operador ternário , se true "SIM"
        echo "<br>Está a tocar? ".($this->getTocar()?"SIM":"NÃO");
        echo "<br>Volume ".$this->getVolume();
        for ($i = 0; $i<=$this->getVolume();$i+=10)     //ciclo for, mostra 1x "|" por cada 10 de volume
        {
            echo "|";
        } 
        echo "<br><br>";
    }
    public function fecharMenu()
    {
        echo "<br>A fechar o menu ...";
        
    }
    public function maisVolume()        //de notar que não recebe parametro, mas aumenta de 5 em 5
    {
        if ($this->getLigado())             //igual a ($this->getLigado()==true)
        {
            $this->setVolume($this->getVolume()+5);
        }
        else
        {
            echo "Erro, televisão desligada";
        }
        
    }
    public function menosVolume()
    {
        if ($this->getLigado())
        {
            $this->setVolume($this->getVolume()-5);
        }
        else
        {
            echo "Erro, televisão desligada";
        }
        
    }
    public function ligarMudo()
    {
        if ($this->getLigado() && $this->getVolume()>0)
        {
            $this->setVolume(0);
        }
        else
        {
            echo "Erro, tv desligada ou sem volume";
        }
        
        
    }
    public function desligarMudo()
    {
        if ($this->getLigado() && $this->getVolume()==0)
        {
            $this->setVolume(50);
        }
        else
        {
            echo "Erro, tv desligada ou com volume";
        }
        
        
    }
    public function play()
    {
        if ($this->getLigado() && !($this->getTocar()))
        {
            $this->setTocar(true);
        }
        else
        {
            echo "Erro, a tocar...";
        }
        
        
    }
    public function pause()
    {
        if ($this->getLigado() && $this->getTocar())
        {
            $this->setTocar(false);
        }  
        else
        {
            echo "Erro, em pause...";
        }
    }
}

?>