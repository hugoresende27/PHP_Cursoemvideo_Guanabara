<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Operadores1</title>
    <link rel = "stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
<?php

$preco = $_GET["p"];
echo "O preço do produto é  $preco €";
$preco -= ($preco*10/100);              //preço com 10% de desconto
echo "</br>com desconto de 10% o preço fica ". number_format ($preco,2)." €";
$preco += $preco*25/100;
echo "</br>com aumento de 25% o preço fica " .number_format($preco,2 )." €";


?>
</div>
</body>
</html>


