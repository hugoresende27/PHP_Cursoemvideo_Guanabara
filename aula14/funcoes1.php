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
function soma ($a, $b){
    $s=$a+$b;
    echo "<br/>A SOMA VALE:: ".$s;
}

function soma_ret ($a,$b){
    //$s=$a+$b;
    return $a+ $b;
}


soma (4,5);
soma (12,11);
$x=99;
$y=35;
soma($x,$y);
echo "<br/>a soma é igual a ".soma_ret($x,$y);

function soma2 (){
    $p = func_get_args();        //recebe os parametros todos
    $tot=func_num_args();       //conta o numero de parametros
    $soma= 0;               //incio da var soma a 0
    for ($i=0;$i<$tot;$i++){        //ciclo for do indice 0 até ao total de argumentos/parametros
        $soma += $p[$i];      //soma = soma + parametro na posicão i
    }
    return $soma;
}

$outra=soma2(1,3,4,5,2,100,-50);
echo "<br/>Agora :: ".$outra;
?>
</div>
</body>
</html>


