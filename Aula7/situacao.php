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
$nota1 = $_GET["n1"];
$nota2 =$_GET["n2"];
$media = ($nota1+$nota2) / 2;
echo "A média entre $nota1 e $nota2 </br> vai ser $media";
echo "</br>a situacao do aluno é ". (($media>=10) ? "Aprovado":"Reprovado");



?>
</div>
</body>
</html>


