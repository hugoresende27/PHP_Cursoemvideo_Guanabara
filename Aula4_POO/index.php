9<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4 POO</title>
</head>
<body>
    <pre>
    <?php
        require_once "Caneta.php";      //chamar o ficheiro Caneta.php que tem a classe

        $c1=new Caneta();               //recurso à classe Caneta para criar um novo objeto, $c1
        $c1->setModelo("BIC");          //definir atributo modelo como "BIC" no objeto $c1
        $c1->modelo="NOL";              //funciona porque atributo modelo é publico
        $c1->setPonta(2.5);             //definir atributo ponta como "0.5" no objecto $c1
        //$c1->ponta="3";                 //NÃO funciona porque atributo ponta é privado
        print_r($c1);
        echo "Eu tenho uma caneta modelo {$c1->getModelo()} tamanho {$c1->getPonta()}\n"; //atenção , usar {} senão os () vão dar erro 

        $c2=new Caneta();
        $c2->setModelo("BIC");
        $c2->setPonta(5);
        print_r($c2);
        echo "Eu tenho uma caneta modelo {$c2->getModelo()} tamanho {$c2->getPonta()}\n";

        $c3=new Caneta ("CASIO","Vermelho",69);
        print_r($c3);
        echo "Eu tenho uma caneta modelo {$c3->getModelo()} tamanho {$c3->getPonta()}\n";

        $c4=new Caneta ("ROLEX","Verde",9);
        print_r($c4);
        echo "Eu tenho uma caneta modelo {$c4->getModelo()} tamanho {$c4->getPonta()}\n";



    ?>
    </pre>
</body>
</html>