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

$nome = "hUGo EmAnuEl TeIxEira Resende";
$outra ="A velha deu na coca e depois ainda deu na coca";
echo "<br/>Nome default:::: ".$nome;
echo "<br/>Nome LOWER  :::: ".strtolower($nome);
echo "<br/>Nome UPPER  :::: ".strtoupper($nome);
echo "<br/>Nome UCFIRST ::::".ucfirst(strtolower($nome));    //aqui estou a colocar tudo em minuscula e depois a
echo "<br/>Nome LCFIRST ::::".lcfirst($nome);               //primeira letra em Maiuscula
echo "<br/>Nome UCWORDS ::::".ucwords($nome);               //primeira letra de cada palavra maiuscula
echo "<br/>Nome STRREV ::::".strrev($outra);                 //string reverse
echo "<br/>Nome STRPOS ::::".strpos($outra,"coca");     //posicao onde começa a palavra coca
echo "<br/>Nome STRIPOS ::::".stripos($outra,"COCA");     //posicao onde começa a palavra coca
echo "<br/>Nome SUBSTR_COUNT ::::".substr_count($outra,"coca");
echo "<br/>Nome SUBSTR ::::".substr($outra,0,7); // de 0 a 7, pode ser -5, pega as 5 ultimas, etc
echo "<br/>Nome STRPAD ::::".str_pad($outra,100,"##",STR_PAD_RIGHT);
echo "<br/>Nome STR_REPEAT::::".str_repeat($outra,5);       //repete a var
echo "<br/>".str_repeat("-",164);
echo "<br/>Nome STR_REPLACE ::::".str_ireplace("coca","benuron",$outra);  //substitui coca por velha em var outra


?>
</div>
</body>
</html>


