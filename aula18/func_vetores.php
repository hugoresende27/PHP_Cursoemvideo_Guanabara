<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP H.R. 2021@</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <pre>
<?php
$v = array ("A","J","M","X","K");
print_r ($v);
echo"<br/>EM REVERSE::";
rsort ($v);         //ordena reverse
print_r($v);

$v[]="H";           //adiciona "H" no fim do vetor $v
array_push ($v,7);          //adiciona no fim
array_pop($v);                     //remove no fim o ultimo elemento

array_unshift($v,69);       //adiciona no principio
array_shift($v);                   //remove no principio
var_dump($v);                           //print com os tipos do elementos no array
echo "<br/> O  vetor tem ".count($v)." elementos";

$n = array (3,4,65,11,4);
print_r($n);
//sort($n);       //ordena o vetor
print_r($n);
echo"<br/>EM ASORT::";
asort ($n);         //ordena e mantêm a associatividade dos index
print_r ($n);

$v2 = array (32,55,22,4,67,88);
echo"<br/><h2>NORMAL::";
print_r($v2);
echo "</h2>";

arsort ($v2);
echo"<br/>EM ARSORT::";
print_r($v2);

asort ($v2);
echo"<br/>EM ASORT::";
print_r($v2);



?>
        </pre>
</div>
</body>
</html>


