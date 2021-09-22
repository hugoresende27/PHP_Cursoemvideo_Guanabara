<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP H.R. 2021@</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
<form method="get" action="res1.php">
    NUMERO:: <input type="number" name="valor"/><br/>
    <input type="submit" value="Calcular"/>
    <fieldset><legend>Opercação</legend>
        <label for ="opcao">Raiz Quadrada</label>
        <input type="radio" name="opcao" id="raiz" value="1"/><br/>

        <label for ="opcao">Dobro</label>
        <input type="radio" name="opcao" id="dobro" value="2" checked/><br/>

        <label for ="opcao">Cubo</label>
        <input type="radio" name="opcao" id="cubo" value="3"><br/>
    </fieldset>
</form>
</div>
</body>
</html>


