<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href ="_css/estilo.css"/>
    <title>PHP H.R. 2021@</title>
</head>
<body>
<div>
<?php
    $n = 4;
    $no = (string) "Hugo";      //cast para string, não era necessário
    $no2 = (int) "32Resende";     //quando o cast para int, o output de "Resende" é 0. cur. se tiver num no inicio aparece
    $n = 4.5;                   //posso alterar a var e o php actualiza o type

    echo $no ." tem ". $no2 ." anos são ". $n;       //no php a concatenação é feita com .
    echo "$no apelido $no2 anos $n outra maneira";  //tbm posso concatenar com " " usando $var

?>
</div>
</body>
</html>


