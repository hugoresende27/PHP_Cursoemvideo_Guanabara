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
$num = isset ($_GET["t"])?$_GET["t"]:1;
$cont=1;
do{
    echo "$num X $cont = ".($num*$cont)."<br/>";
    $cont++;
}while ($cont<=10);

?>
   <br/>     <a href="tabuada.php">Voltar</a>
</div>
</body>
</html>


