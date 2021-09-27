<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula6-Encapsulamento</title>
</head>
<body>
    <h1>Aula controlo remoto </h1>
    <pre>
<?php
    require_once'ControleRemoto.php';       //o require_once 'Controlador.php' que tem os metodos abstratos é feito 
                                            //em ControleRemoto.php

    $c1=new ControloRemoto();
    $c1->ligar();
    $c1->maisVolume();
    $c1->abrirMenu();

    $c2=new ControloRemoto();
    $c2->ligar();
    $c2->menosVolume();
    $c2->abrirMenu();
    $c2->maisVolume();
    $c2->ligarMudo();
    $c2->fecharMenu();

    $c3=new ControloRemoto();
    $c3->maisVolume();


?>
    </pre>
</body>
</html>