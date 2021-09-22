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

$x = "abc";
$$x = "def";                //criar var $abc com valor de def, $$ variantes de variaveis
echo "o conteudo de x é $x";
echo "</br>a var criada abc recebeu o valor de $abc";

?>
</div>
</body>
</html>


