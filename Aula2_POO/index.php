<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula2_POO</title>
</head>
<body>

    <?php
        require_once "Caneta.php";      #incluir o ficheiro Caneta.php
        $c1 = new Caneta;

        $c1->cor="Azul";
        $c1->ponta=0.5;
        $c1->tapada=true;
        
        $c1->escrever();        #uso do metodo escrever dentro da classe c1
        $c1->destapar();
        $c1->escrever();
        $c1->tapar();
        $c1->escrever();

        var_dump ($c1);             #mostrar os valores de c1, função var_dump
        print_r($c1);               #faz o mesmo q a função de cima, mas melhor legivel

        $c2 = new Caneta;           #instancia diferente da mesma classe Caneta

        $c2->cor="Vermelho";
        $c2->ponta=1;
        $c2->escrever();

        print_r($c2);
        quebra();
        $s1 = new SessaoEstudo;

        $s1->hora=20;
        $s1->conteudo="php";
        $s1->aluno="Hugo";
        $s1->estado=false;

        var_dump($s1);
        print_r($s1);

        $s1->setHora(10);
        $s1->aluno();
        $s1->status();
        print_r($s1);
        quebra();
            
        $r1= new Rato;

        $r1->setCor("Azul");
        $r1->setPeso(200);
        $r1->fios=true;

        print_r($r1);

    ?>
    
</body>
</html>