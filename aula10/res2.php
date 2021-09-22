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
$op = $_GET["ds"]?$_GET["ds"]:1;
//$escola="";
switch ($op){
    case (2):
    case (3):
    case (4):
    case (5):
        $escola = "SIM";
        break;
    case (1):
    case (7):
        $escola= "NÃO";
        break;
}
echo "no dia $op a situação escola:: $escola";
?>

    <a href="javascript:history.go(-1)"><h1>Voltar</h1></a>
</div>
</body>
</html>


