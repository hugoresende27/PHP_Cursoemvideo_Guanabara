<?php
class Lutador{

    //atributos
    private $nome;
    private $nacionalidade;
    private $idade,$altura,$peso;
    private $categoria,$vitorias,$derrotas,$empates;

    //metodos
    function apresentar()
    {
        echo "<p>--------------------------</p>";
        echo "<p>O lutador ".$this->getNome();
        echo " vindo de ".$this->getNacionalidade();
        echo " com ".$this->getIdade()." anos pesa ". $this->getPeso() . " mede ". $this->getAltura();
        echo "<p> tem ".$this->getVitorias()." VITÓRIAS, ".$this->getDerrotas()." DERROTAS e ".$this->getEmpates()." empates.";
    }
    function status()
    {
        echo "<p>--------------------------------<p>";
        echo "<p>".$this->getNome()." é um peso ".$this->getCategoria();
        echo "<p>Venceu ".$this->getVitorias()." combates,";
        echo " perdeu ".$this->getDerrotas()." e empatou ".$this->getEmpates();
    }

    function ganharLuta()
    {
        $this->setVitorias($this->getVitorias()+1);
        echo "<p>Lutador ".$this->nome." fica com ".$this->getVitorias()." vitórias";
    }
    function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas()+1);
        echo "<p>Lutador ".$this->nome." fica com ".$this->getDerrotas()." derrotas";
    }
    function empatarLuta()
    {
        $this->setEmpates($this->getEmpates()+1);
        echo "<p>Lutador ".$this->nome." fica com ".$this->getEmpates()." empates";
    }

    //metodos especiais
    function __construct($nom,$nac,$ida,$alt,$pes,$vit,$der,$emp)
    {
        $this->nome=$nom;
        $this->nacionalidade=$nac;
        $this->idade=$ida;
        $this->altura=$alt;
        $this->setPeso($pes);       //o peso vai definir a categoria
        $this->vitorias=$vit;
        $this->derrotas=$der;
        $this->empates=$emp;
    }  

    function getNome()
    {
        return $this->nome;
    }
    function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    function getIdade()
    {
        return $this->idade;
    }
    function getAltura()
    {
        return $this->altura;
    }
    function getPeso()
    {
        return $this->peso;
    }
    function getCategoria()
    {
        return $this->categoria;
    }
    function getVitorias()
    {
        return $this->vitorias;
    }
    function getDerrotas()
    {
        return $this->derrotas;
    }
    function getEmpates()
    {
        return $this->empates;
    }

    function setNome($n)
    {
        $this->nome=$n;
    }
    function setNacionalidade($na)
    {
        $this->nacionalidade=$na;
    }
    function setIdade($i)
    {
        $this->idade=$i;
    }
    function setAltura($a)
    {
        $this->altura=$a;
    }
    function setPeso($p)
    {
        $this->peso=$p;
        $this->setCategoria();
    }
    private function setCategoria()
    {
        if ($this->peso<52.2)
        {
            $this->categoria="Inválido";
        }
        else if ($this->peso <=70.3)
        {
            $this->categoria="Leve";
        }
        else if ($this->peso <=83.9)
        {
            $this->categoria="Médio";
        }
        else if ($this->peso <=120.2)
        {
            $this->categoria="Pesado";
        }
        else{
            $this->categoria="Inválido";
        }
    }

    function setVitorias($v)
    {
        $this->vitorias=$v;
    }
    function setDerrotas($d)
    {
        $this->derrotas=$d;
    }
    function setEmpates($e)
    {
        $this->empates=$e;
    }







}

?>