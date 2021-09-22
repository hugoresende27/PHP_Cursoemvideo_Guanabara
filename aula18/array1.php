<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP H.R. 2021@</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <pre>
<?php
$n = array (3,5,8,2);
print_r ($n);
$n[]=7;
echo "<br/>";
print_r($n);

$c = range(15,50,3);
echo "<br/>";
print_r($c);

for ($i=0;$i<count($c);$i++){
    echo ("<br/>#->".$c[$i]);
}
?>
        <table border ="1"><tr>
<?php

foreach ($c as $valor){
    echo "<td>".$valor;
}

?>
            </table>
        </pre>
</div>
</body>
</html>


