<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 7 POO Ultra Emoji Fight </title>
</head>
<body>
    
    <?php
    require_once "Lutador.php";
    require_once 'Luta.php';
    $lutador = array();

//  $lutador[ ]= new Lutador( nome ,    nacionalidade , idade , altura , peso , vit , der , emp)
    $lutador[0]= new Lutador("Hugo",      "Portugal",     32,    1.74,    70,    9,    1,    2);
    $lutador[1]= new Lutador("Putscript",  "Brasil",      29,    1.68,  57.8,   14,    2,    3);
    $lutador[2]= new Lutador("SnapShadow",  "EUA",        35,    1.65,  80.9,   12,   11,    2);
    $lutador[3]= new Lutador("Dead Code",  "Mexico",      28,    1.94,   110,   97,   17,    2);    
    $lutador[4]= new Lutador("UFOCobol",  "Portugal",     44,    1.84,    90,   19,   88,   20);
    $lutador[5]= new Lutador("Nadaart",   "Portugal",     17,    1.58,    87,   19,    1,    2);

/*  zona de testes
    $lutador[5]->status();
    $lutador[5]->apresentar();

    $lutador[3]->apresentar();
    $lutador[3]->ganharLuta();
    $lutador[3]->status();
 */   
    $luta1= new Luta();
    $luta1->marcarLuta($lutador[0],$lutador[1]);
    $luta1->lutar();
    echo"<p>-------------------OUTRA LUTA----------------";
    $luta2= new Luta();
    $luta2->marcarLuta($lutador[1],$lutador[3]);
    $luta2->lutar();
    echo"<p>-------------------OUTRA LUTA----------------";
    $luta3= new Luta();
    $luta3->marcarLuta($lutador[3],$lutador[4]);
    $luta3->lutar();

    ?>
    
</body>
</html>