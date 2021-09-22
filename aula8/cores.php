<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $txt = isset ($_GET["t"])?$_GET["t"]:"sem texto";       //operador ternário  isset, para não dar erro se nao receber
    $tam = isset ($_GET["tam"])?$_GET["tam"]:"12pt";        //nada coloca os valores em ultimo na linha de codigo
    $cor = isset ($_GET["cor"])?$_GET["cor"]: "#000000";



    ?>
    <!--criar um estilo como nome texto, o font size vai receber a var $tam e a cor $cor-->
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>

    <meta charset="UTF-8">
    <title>PHP H.R. 2021@</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
<?php

echo "<span class='texto'>$txt</span>";     //print da var $txt dentro da class texto, q recebe o $tam e $cor do style.texto
echo "<br/><br/>temos o texto $txt no tamanho $tam com a cor $cor";

?>

    <a href="exe3.php"><h2>Voltando</h2></a>
</div>
</body>
</html>


