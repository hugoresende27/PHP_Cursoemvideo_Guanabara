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
$a = 5;
$x= 5;

$b = &$a;           // & faz com q $a passe a valer 10 sempre, o valor é passado por referencia de $b+=5;
$b+=5;

$c = $x;            //aqui o valor não é passado por ref, X vai continuar a valer 5 quando exibido
$c+=5;

echo "o valor A vale ... $a";
echo "</br>o valor B vale ... $b";

echo"</br>o valor de X vale ... $x";
echo"</br>o valor de C vale ... $c";

?>
</div>
</body>
</html>


