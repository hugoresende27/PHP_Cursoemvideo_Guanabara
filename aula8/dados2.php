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
$ano_nasc=  ($_GET["a"])?$_GET["a"]:0;
$nome =($_GET["n"])?$_GET["n"]:"[Sem nome]";           //operador unário com isset para não dar erro ao exibir a pagina
$sexo =( $_GET["sexo"])?$_GET["sexo"]:["sem sexo"] ;    //sem as var n a ou sexo definidas


$idade = date("Y")-$ano_nasc;

echo "O teu nome é $nome e nasceste em $ano_nasc, por isso tens $idade e és do sexo $sexo ";

?>
    <a href="exe2.php">Voltar</a>
</div>
</body>
</html>


