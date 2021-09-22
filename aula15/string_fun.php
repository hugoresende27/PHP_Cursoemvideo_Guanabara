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

$prod="leite";
$preco = 4.5;
printf("O %s custa %.2f", $prod, $preco);
echo "<br/>O $prod custa ".number_format($preco,2);


$x[0]=4;
$x[1]=8;
$x[2]=12;
echo "<br/>";
print_r($x);
$v2= array (3,7,6,2,1,9);
echo "<br/>";
print_r($v2);
echo "<br/>";
var_dump($v2);
echo "<br/>";
var_export($v2);

$txt="        Mais palavras  Este é um texto gigante com muitas letras e      palavaras no curso de php para mostrar o funcionamento de wordwrap     ";
$res=wordwrap($txt,25,"<br/>\n",true);
echo "<br/>".$res;

$tamanho = strlen($txt);
echo "<br/>SRTLEN::".$tamanho;

$novo = trim ($txt);
echo "<br/>TRIM::".(strlen($novo));

$novo2 = ltrim ($txt);
echo "<br/>LTRIM::".(strlen($novo2));

$novo3 = rtrim ($txt);
echo "<br/>RTRIM::".(strlen($novo3));

$txt2= "Hugo Emanuel Teixeira Resende";

$cont = str_word_count($txt2,0);
$cont2 = str_word_count($txt2,1);    //se for format 1, torna o array, preciso do print_r para mostrar
$cont3 = str_word_count($txt2,2);    //tbm criar array mas mantem posicao dentro de cada palavra na string
echo "<br/>COUNT 0::".$cont;
echo "<br/><br/>COUNT 1::";
print_r ($cont2);
echo "<br/><br/>COUNT 2::";
print_r ($cont3);
echo "<br/>STRLEN txt2::".(strlen($txt2));


$vetor=explode(" ",$txt2);
echo "<br/><br/>EXPLODE ::";
print_r($vetor);

$split = str_split($txt2);
echo "<br/><br/>STR_SPLIT::";
print_r($split);


$imp = implode("#",$x);
echo "<br/><br/>IMPLODE::";
print ($imp);

$letra = chr (67);
$letra2 = chr (99);
echo "<br/>A letra de código 67 é $letra e a 99 é a $letra2";

$letraA = ord("C");
$letraB = ord("c");
echo "<br/>A letra C corresponde a $letraA e a c corresponde a $letraB";
?>
</div>
</body>
</html>


