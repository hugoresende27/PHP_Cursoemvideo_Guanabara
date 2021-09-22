<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel ="stylesheet" href="_css/estilo.css">
    <title>Funções aritméticas</title>
    <style>
        h2{
            font : 16pt Arial;
            color: #7e050c;
        }
    </style>
</head>
<body>
<div>
<?php
$v1 = $_GET["x"];
$v2 = $_GET["y"];
echo "<h2>Valores recebidos--> $v1 e $v2</h2>";
echo "<h2></br>O valor absoluto de $v2 é --->". abs($v2);        //abs tira o sinal negativo
echo "<h2></br>O valor de $v1<sup>$v2</sup> é --->". pow ($v1,$v2); //faz o $v1 elevado a $v2
echo "<h2></br>A raiz de $v1 é -->".sqrt($v1);                      //raiz quadrada
echo "<h2></br>O valor de $v2 arredondado é -->". round($v2);       //arredondamento, regra matemática
echo "<h2></br>O ceil de $v2 é -->".ceil($v2);                      //tbm existe o ceil e floor, cima e baixo
echo "<h2></br>A parte inteira de $v2 é -->". intval($v2);      //parte inteira
echo "<h2></br>Formatado com 3 casas decimais $v2 fica -->". number_format($v2,3,",",".");
?>
</div>
</body>
</html>


