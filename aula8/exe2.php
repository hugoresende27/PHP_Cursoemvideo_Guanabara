<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 2 :: PHP H.R. 2021@</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <form method ="get" action ="dados2.php">         <!--metodo de input get, pode ser post, ação no nome do ficheiro-->
        Nome : <input type ="text" name ="n"/>    <!--Escreve valor e depois caixa de fomulario tipo texto e nome v-->
        </br>Ano Nascimento :<input type ="number" name ="a"/>
        <fieldset><legend>Sexo</legend>
            <input type="radio"  name ="sexo" id="masc" value="Homem" checked/>        <!-- dois radio precisam ter o mesmo nome-->
            <label for ="masc">Masculino</label>
            <input type="radio"  name ="sexo" id="fem" value="Mulher"/>
            <label for ="fem">Feminino</label>
        </fieldset>

            </br> <input type = "submit" value ="Confirmar"/>  <!--botão submit e escrito calcular no botão-->


    </form>
<?php



?>
</div>
</body>
</html>


