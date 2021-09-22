<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP H.R. 2021@</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        span.t{
            font-size: 33pt;
            color: coral;
        }
    </style>
</head>
<body>
<div>
<?php
$op=isset($_GET["cidade"])?$_GET["cidade"]:1;
//$texto= split(':',$op)[0];

switch ($op){
    case 'coimbra':
    case 'figueira':
    case 'montemor':
        $regiao= "CENTRO";
        break;

    case 'braga':
    case 'porto':
    case 'guimaraes':
        $regiao= "NORTE";
        break;

    case 'lisboa':
    case 'faro':
    case 'beja':
        $regiao= "SUL";
        break;

    default:
        $regiao="Indefinido";
}
echo "<span class='t'> Vives na cidade $op que fica na região $regiao</span>";

?>
    <br/>
    <a href="javascript:history.go(-1)"><h1>Voltar</h1></a>
</div>
</body>
</html>


