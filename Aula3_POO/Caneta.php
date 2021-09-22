<?php
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    private $tapada;


        public function escrever(){
            if ($this->tapada == true)      #teste condicional simples, == true não é necessário
            {                               #uso do $this refere-se ao atributo da classe Caneta
                echo '<p style="color:red;" >Não posso escrever ERROR...</p>';
            } else 
            {
                echo '<p style="color:green;">Teste de escrita OK....</p>';
            }
            
        }

        public function tapar(){
            $this->tapada = true;

        }

        public function destapar (){
            $this->tapada=false;

        }
    }

?>