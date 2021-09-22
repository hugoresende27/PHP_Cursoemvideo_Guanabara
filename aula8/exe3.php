<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 3 .. PHP H.R. 2021@</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>

    <form method="get" action ="cores.php">             <!-- form com  metodo get e redireccionada para cores.php -->
        <label for="itxt">Texto:: </label>              <!--label escrito Texto, for ="itxt"-->
        <input type="text" name="t" id="itxt"/><br/>    <!--tipo texto, nome "t" e id "itxt"-->
        <label for="itam">Tamanho:: </label>            <!--outra label a dizer tamanho, for "itam"-->
        <select name="tam" id="itam">                   <!--escolha select, id "itam", nome var "tam"-->
            <option value="8pt">8</option>
            <option value="10pt">10</option>
            <option value="12pt">12</option>
            <option value="14pt" selected>14</option>   <!--selected, opcao por defeito escolhida-->
            <option value="36pt">36</option>
            <option value="48pt">48</option>
        </select><br/>
        <label for="icor">Cor::</label>                 <!--label a dizer Cor::, for "icor"-->
        <input type="color" name="cor" id="icor"/><br/> <!--tipo color, nome var "cor", id "icor"-->
        <input type="submit" value="Enviar"/>           <!--botão submit-->

    </form>
</div>
</body>
</html>


