<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href ="_css/estilo.css"/>
    <title>Operações aritméticas</title>
</head>
<body>
<div>
<?php
    $a = 3;
    $b = 2;
    $s = $a + $b;
    $d = $a/$b;
    $m = $a % $b;
    echo "a soma é ".$s." e divisão ".$d." o modulo é ".$m;
    //$n1 = 3;
    //$n2 = 2;
    $n1 = $_GET["a"];       //fazer o input de dados no URL, http://192.168.1.39/PHP_Guanabara/Aula5/somador.php?a=50&b=20
    $n2 = $_GET["b"];       //no fim do URL colocar ? a= 50 & b = 20 e depois no codigo, $var = $_GET["a"];
    echo "</br>Valores recebidos n1:: ".$n1."</br>Valores recebidos n2::".$n2;
    echo "</br>A soma vale == ".($n1+$n2);
    echo "</br>A subtracao vale == ".($n1-$n2);
    echo "</br>A divisão vale == ".$n1/$n2;
    echo "</br>A multiplicação vale == ".$n1*$n2;
    echo "</br>O modulo vale == ".$n1%$n2;
    echo "</br>a media vale == ".(($n1+$n2)/2);


?>
</div>
</body>
</html>


