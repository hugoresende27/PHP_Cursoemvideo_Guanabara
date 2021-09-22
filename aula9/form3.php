<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP H.R. 2021@</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        span.texto{
            font-size: 25pt;
            color: #7e050c;
        }
    </style>
</head>
<body>
<div>
<?php
$nota1=$_GET["nota1"]?$_GET["nota1"]:0;
$nota2 =$_GET["nota2"]?$_GET["nota2"]:0;
$media = ($nota1+$nota2)/2;
if ($media>=9.5){
    $sit="aprovado";
}
elseif (($media>=7) && ($media<9.5)){
    $sit="recuperação";
}
else{
    $sit="Chumbado";
}

echo "<span class='texto'>Com a nota de $nota1 e $nota2 ficas com uma media de $media e na situação $sit</span>";

?>
    <a href="exe3.php"><h2>Voltar</h2></a>
</div>
</body>
</html>


