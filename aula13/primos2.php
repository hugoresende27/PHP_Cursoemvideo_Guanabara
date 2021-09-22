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
$valor = isset ($_GET["n"])?$_GET["n"]:1;
echo "<h2>Analisando o número $valor</h2>";
$primo=0;
$mult="";
for ($x=1;$x<=$valor;$x++)
{
        if (($valor % $x) == 0)
        {
            $primo++;

        }

}
    if ($primo<3)
    {
        echo "O $valor é primo";
    }
    else
    {
        echo "O $valor NÃO é primo";

    }

    echo "<br/>MULTIPLOS ::: $primo";
    echo "<br/> Valores Multiplos :: ";
?>
    <a href="javascript:history.go(-1)">voltar</a>
</div>
</body>
</html>


