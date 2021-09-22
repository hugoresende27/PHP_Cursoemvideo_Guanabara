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

function teste (& $x){          //se fosse teste ($x) o valor de $a seria sempre 3, & passa o valor por ref
    $x += 2;
    echo $x;
}

$a=3;
teste($a);
echo "<br/>".$a;
?>
</div>
</body>
</html>


