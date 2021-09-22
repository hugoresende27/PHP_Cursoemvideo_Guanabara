<?php
class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tapada;


        function escrever(){
            if ($this->tapada == true)      #teste condicional simples, == true não é necessário
            {                               #uso do $this refere-se ao atributo da classe Caneta
                echo '<p style="color:red;" >Não posso escrever ERROR...</p>';
            } else 
            {
                echo '<p style="color:green;">Teste de escrita OK....</p>';
            }
            
        }

        function tapar(){
            $this->tapada = true;

        }

        function destapar (){
            $this->tapada=false;

        }
    }

class SessaoEstudo {            #objeto abstrato
    var $hora;                  #atributos hora, conteudo e aluno
    var $conteudo;
    var $aluno;
    var $estado;

        function setHora($h){       #metodo para definir hora
              $this->hora=$h;  
        }

        function aluno(){           #metodo com um echo
           echo"<br><br>Bons Estudos";
        }

        function status(){
            if ($this->estado==true)
            {
                echo "A decorrer...";
            } else 
            {
                echo "Pausada";
            }
    
        }

     
}

class Rato{                 #objeto concreto
    var $cor;               #atributos
    var $peso;
    var $fios;

        function setCor($c){
            $this->cor=$c;
        }

        function setPeso($p){
            $this->peso=$p;
        }
}

function quebra(){
    echo"<br><br><br><br><br><br>";
}
?>