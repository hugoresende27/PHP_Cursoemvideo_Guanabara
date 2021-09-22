<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP H.R. 2021@</title>
    <link rel ="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
<?php
$valor=$_GET["v"];
$raiz2 = sqrt($valor);

echo "o valor $valor tem a raiz quadrada de ".number_format($raiz2,2);

?>
    <a href = "exe1.php">Voltar</a>   <!--link para voltar -->
</div>
</body>
</html>


