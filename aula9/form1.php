<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $ano = $_GET["ano"]?$_GET["ano"]:1900;
    $idade = date("Y")-$ano;


    ?>
    <style>
        span.texto{
            font-size: 26pt;
            color: #273747;
        }
    </style>

    <meta charset="UTF-8">
    <title>PHP H.R. 2021@</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>

    <?php

    echo "<span class='texto'>A sua idade $idade anos</span><br/>";
    if ($idade<16){
        $votar = "NÃO pode votar";
        $dirigir = "NÃO pode dirigir";


    }
    elseif (($idade>=16 && $idade<18) || ($idade>65)){
            $votar="Opcional";
            $dirigir="Com adultos";
        }
        else {
            $votar ="pode votar";
            $dirigir ="pode dirigir";
        }


    echo "<span class='texto'>Situação voto :: $votar<br/>Situação dirigir:: $dirigir</span>";
    ?>

    <a href="exe1.php"><h2>Voltar</h2></a>
</div>

</body>
</html>


