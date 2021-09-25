<?php
class Conta{
    //atributos ///////////////////////
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    ///////////////////////

    ///////////metodo contrutor //////////////////
    function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "\nConta criada com sucesso!\n";

    }
    /////////////////////////

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
 
    public function setDono($d){        //funcao setDono recebe o nome como parametro Ex::$obj_criado->setDono("Hugo");
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
    public function abrirConta($t)      //metodo abrirConta recebe parametro tipo, pode ser Prazo ou Poupanca
    {                                   //Ex::$Obj->abrirConta("Poupanca");
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t=="Prazo")
        {                               //ao criar um novo objeto, o saldo vai ser 50
            $this->setSaldo(50);        //se abrir conta a prazo recebe 50 de bonus
        }
        else if ($t=="Poupanca") 
        {                               //ao criar um novo objeto, o saldo vai ser 150
            $this->setSaldo(150);       //se abrir conta poupanca recebe 150 de bonus
        }
    }

    public function fecharConta()
    {
     if ($this->getSaldo() > 0)
     {
         echo "\nExiste saldo, não pode encerrar...\n";
     }   
     else if ($this->getSaldo()<0)
     {
         echo "\nSaldo negativo, regularize a situação...\n";
     }
     else
     {
         $this->setStatus(false);
         echo "\n\tConta encerrada...\n";
     }
    }


    public function depositar($val)
    {
        if ($this->getStatus())     //se status for true
        {
            $this->setSaldo($val+$this->getSaldo()); 
            echo "Depósito de $val, saldo:: {$this->getSaldo()}\n";
        }
        else
        {
            echo "\nErro, conta nao existe\n";
        }
         
    }
    public function levantar($val)
    {
        if ($this->getStatus())
        {
            if ($this->getSaldo()>=$val)
            {
                $this->setSaldo($this->getSaldo()-$val);
                echo "Levantamento de $val, saldo:: {$this->getSaldo()}\n";
            }
            else
            {
                echo "\nSaldo insuficiente na conta de {$this->getDono()}\n";
            }
        }
        else
        {
            echo "Erro, conta nao existe\n";
        }
        
    }
    public function mensalidade()
    {
       
        if ($this->getTipo()=="Prazo")
        {
            $mensalidade = 20;
        }
        else if ($this->getTipo()=="Poupanca")
        {
            $mensalidade = 12;
        }
        if ($this->getStatus())
        {
            if ($this->getSaldo()>$mensalidade)
            {
                $this->setSaldo($this->getSaldo()-$mensalidade);
            }
            else if ($this->getSaldo()<$mensalidade)
            {
                echo "Saldo insuficiente para pagar a mensalidade...\n";
            }
        }
    }
}
?>