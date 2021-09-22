<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP H.R. 2021@</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
<?php
$i = 1;                     //indice começa no 1
while ($i<=5){              //contagem ate 5
    $v="num".$i;            //var $v recebe "num" + o valor do indice, num1, 2 ,3 ,4,5
    $url = "v".$i;          //var $url recebe "v" + 1, 2, 3, 4, 5
    $$v =  ($_GET[$url])?$_GET[$url]:0; //a var v assume o valor de url, vai criar uma variavel da variavel v, num1, num2
    $i++;                               //num3 num4 num5 variaveis dinâmicas


}

$x=1;
while ($x<=5){              //loop de echo para mostrar os valores, com contador x para mostrar valor $x
    $v="num".$x;
    echo "Valor $x :: ".$$v."<br/>";
    $x++;
}

?>
    <br/>
    <a href="formulario5.php"><h2>Voltar</h2></a>
</div>
</body>
</html>


