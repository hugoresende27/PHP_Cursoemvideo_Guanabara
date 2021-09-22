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
echo "WHILE <br/>";
$c=1;
while ($c<=10){
    echo "Contagem $c<br/>";
    $c++;
}
echo "WHILE <br/>";
$c_tras=10;
while ($c_tras>=0){
    echo "Contagem para trás $c_tras<br>";
    $c_tras--;
}
echo "DO_WHILE <br/>";
$cc=1;
do{
    echo "|-$cc";
    $cc++;
}while($cc<=10);
echo "DO_WHILE <br/>";
$cct=10;
do{
    echo "--$cct";
    $cct--;
}while ($cct>1);
?>
</div>
</body>
</html>


