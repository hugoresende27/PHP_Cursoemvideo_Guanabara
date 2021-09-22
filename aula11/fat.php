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
$num=isset ($_GET["val"])?$_GET["val"]:1;
$contador=$num;     //contador assum o valor introduzido
$fatorial=1;        //fatorial começa em 1

do {
    $fatorial = $fatorial * $contador;  //fatorial*=contador    1 * 5 + 1 * 4 + 1 * 3 + 1 * 2 + 1 * 1
    $contador--;                        //contador -1 -1 -1

}while($contador>=1);           //até o contador chegar a 1
echo "O fatorial de $num é $fatorial";


?>
    <br/><a href="fatorial.php">Voltar</a>
</div>

</body>
</html>


