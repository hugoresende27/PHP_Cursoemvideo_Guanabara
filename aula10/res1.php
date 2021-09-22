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
//$num = isset ($_GET["valor"])?$_GET["valor"]:1;
//$op =isset ($_GET["opcao"])?$_GET["opcao"]:1;
$num = $_GET["valor"]?$_GET["valor"]:0;
$op= $_GET["opcao"]?$_GET["opcao"]:1;

echo "valor escolhido $num<br/>";
switch ($op){
    case (1):
        $resultado=sqrt($num);
        break;
    case (2):
        $resultado=$num*2;
        break;
    case (3):
        $resultado=pow($num,3);
        break;
}

echo " resultado ::: ".number_format($resultado,3);
?>
    <a href="exe1.php"><h3>Voltar</h3></a>
</div>
</body>
</html>


