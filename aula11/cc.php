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
$passo = $_GET["paco"]?$_GET["paco"]:1;
$inicio = $_GET["ini"]?$_GET["ini"]:1;
$fim =$_GET["fim"]?$_GET["fim"]:50;
if ($inicio<=$fim) {
    while ($inicio <= $fim) {
        echo "$inicio < ";
        $inicio += $passo;
    }
}
else {
    while ($inicio >= $fim) {
        echo "$inicio > ";
        $inicio -= $passo;
    }
}
?>
    <br/><a href="contador.php">Voltar</a>
</div>
</body>
</html>


