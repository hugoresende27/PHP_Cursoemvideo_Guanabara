<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP H.R. 2021@</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <table border ="1"><tr>
<?php
$v = array (1=>"A",
            6=>"B",
            15=>"C",
            3=>"D");
$v[]=69;
unset ($v[15]);
foreach ($v as $x){
    echo "<td>".$x;
}
echo "</table><pre>";

print_r($v);
//for ($i=0;$i<count($v);$i++){
//    echo "<br/>".$v[$i];
//}
echo "<table border='1'><tr>";//abre uma coluna em html
$cad = array ("nome"=>"Hugo",
              "apelido"=>"Resende",
              "idade"=>32,
              "peso"=>70.5);
print_r($cad);
foreach ($cad as $k => $x){
    echo "<td>".$k."</td>";     //uma chave em cada linha
    echo "<td>".$x."</td><tr>";//valor em cada linha noutra coluna
}


?>

</div>
</body>
</html>


