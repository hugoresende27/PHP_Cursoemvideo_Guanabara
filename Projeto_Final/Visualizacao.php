<?php
require_once 'Aluno.php';
require_once 'Video.php';

class Visualizacao 
{
    private $filme;
    private $espetador;
    

    public function __construct($espetador,$filme)
    {
        $this->filme = $filme;
        $this->espetador = $espetador;
        $this->filme->setViews($this->filme->getViews()+1);     //sempre que há uma visualizacao o filme, com recurso ao metodo  
                                                                //setViews adiciona se +1 view ao filme na classe Video
        $this->espetador->setTotal($this->espetador->getTotal()+1);//adiciona +1 ao total, metodo da classe Aluno
    }


    //getters e setters
    public function getFilme() {
        return $this->filme;
    }

    public function setFilme($filme) {
        $this->filme = $filme;
    }

    public function getEspetador() {
        return $this->espetador;
    }

    public function setEspetador($espetador) {
        $this->espetador = $espetador;
    }

    public function avaliar()
    {
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($n)
    {
        $this->filme->setAvaliacao($n);
    }
    public function avaliarPer($p)
    {
        $nota=0;
        if($p <= 20)
        {
            $nota=3;
        }else if ($p<=50)
        {
            $nota = 5;
        }else if ($p<=90)
        {
            $nota=8;
        }else{
            $nota=10;
        }
        $this->filme->setAvaliacao($nota);
    }

}


?>