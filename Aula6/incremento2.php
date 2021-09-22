<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP H.R. 2021@</title>
    <link rel="stylesheet"; href="_css/estilo.css">
</head>
<body>
<div>
<?php
#tbm se pode comentar com # e com /* */ para multiplas linhas
$ano_atual = $_GET["aa"];
echo "O ano actual é $ano_atual";
echo "</br>O ano mais um fica pre incremento fica...". ++$ano_atual;       //se for pos dcremento $ano_atual++, nao incrementa antes
echo "</br>O ano  mais um pós incremento fica...". $ano_atual++;        //de mostrar

?>
</div>
</body>
</html>


