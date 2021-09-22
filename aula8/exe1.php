<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercicio com Form</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <form method ="get" action ="dados.php">         <!--metodo de input get, pode ser post, ação no nome do ficheiro-->
        Valor : <input type ="text" name ="v"/>    <!--Escreve valor e depois caixa de fomulario tipo texto e nome v-->
        <input type = "submit" value ="Calcular Raiz"/>  <!--botão submit e escrito calcular no botão-->

    </form>
<?php

//$valor = $_GET["v"];             //var valor get valor através da caixa de input nome objeto "v"

//echo "Escreves te $valor ";      //escreve o valor digitado no form


?>
</div>
</body>
</html>


