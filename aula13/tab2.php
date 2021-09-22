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
$num = isset ($_GET["t"])?$_GET["t"]:1;
 echo "<h3>Tabuada do $num </h3>";

for ($c=1;$c<=10;$c++){
    echo "$num X $c    =". ($num*$c)." <br/>";
}

?>
   <br/> <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>


