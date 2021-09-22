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

$ano = $_GET["an"];
$idade = 2021 - $ano;
echo "Quem nasceu em $ano tem $idade anos";
$tipo = $idade >= 18 && $idade<65 ? "Obrigatorio":"NAO Obrigatório";
echo "</br>Sendo assim o seu voto é do tipo $tipo";

?>
</div>
</body>
</html>


