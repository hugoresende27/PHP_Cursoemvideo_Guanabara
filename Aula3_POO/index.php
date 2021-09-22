<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula3_POO</title>
</head>
<body>
<pre>       <!--tag pre para ver em formato código-->
    <?php
        require_once "Caneta.php";      #incluir o ficheiro Caneta.php
        $c1 = new Caneta;

        $c1->modelo="BIC";
        $c1->cor="Verde";
        //$c1->ponta=3;
        //$c1->carga=99;
        //$c1->tapada=true;
        var_dump($c1);
        print_r($c1);
        $c1->escrever();            #metodo público, posso usar        
        $c1->tapar();               #metodo público, apesar de atributo tapada protegido ou protegido, consigo usar 
        print_r($c1);
        $c1->escrever();
        $c1->destapar();
        $c1->escrever();



    ?>
</pre>
</body>
</html>