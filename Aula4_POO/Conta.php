<?php
class Conta{
    //atributos ///////////////////////
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    ///////////////////////

    public function __construct($num, $tip, $don)
    {
        $this->numConta=$num;
        $this->tipo=$tip;
        $this->dono=$don;
        $this->saldo=0;
        $this->status=false;

    }
    //metodos especiais, setters e getters /////////////
    public function setnumConta($n){
        $this->numConta=$n;
    }
    public function getnumConta(){
        return $this->numConta;
    }
  
    public function setTipo($t){
        $this->tipo=$t;
    }
    public function getTipo(){
        return $this->tipo;
    }
 
    public function setDono($d){
        $this->dono=$d;
    }
    public function getDono(){
        return $this->dono;
    }
   
    public function setSaldo($s){
        $this->saldo=$s;
    }
    public function getSaldo(){
        return $this->saldo;
    }
   
    public function setStatus($st){
        $this->status=$st;
    }
    public function getStatus(){
        return $this->status;
    }
    /////////////////////////////////////////////

    //metodos especificos //////////////////////////////
    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($this->tipo="Prazo")
        {
            $this->setSaldo(50);
        }
        else if ($this->tipo=="Poupanca") 
        {
            $this->setSaldo(150);
        }
    }

    public function fecharConta()
    {
     if ($this->saldo > 0)
     {
         echo "Existe saldo, não pode encerrar...";
     }   
     else if ($this->saldo<0)
     {
         echo "Saldo negativo, regularize a situação...";
     }
     else
     {
         $this->setStatus(false);
     }
    }


    public function depositar($val)
    {
        if ($this->getStatus())
        {
            $this->setSaldo($val+getSaldo()); 
        }
        else
        {
            echo "Erro, conta nao existe";
        }
         
    }
    public function levantar($val)
    {
        if ($this->getStatus())
        {
            if ($this->saldo>$val)
            {
                $this->setSaldo($val-getSaldo());
            }
            else
            {
                echo "Saldo insuficiente";
            }
        }
        else
        {
            echo "Erro, conta nao existe";
        }
        
    }
    public function mensalidade()
    {
        $mensalidade = 0;
        if ($this->tipo=="Prazo")
        {
            $mensalidade = 20;
        }
        else if ($this->tipo=="Poupanca")
        {
            $mensalidade = 12;
        }
        if ($this->getStatus())
        {
            if ($this->saldo>$mensalidade)
            {
                $this->setSaldo(getSaldo()-$mensalidade);
            }
            else if ($this->saldo<$mensalidade)
            {
                echo "Saldo insuficiente para pagar a mensalidade...";
            }
        }
    }
}
?>