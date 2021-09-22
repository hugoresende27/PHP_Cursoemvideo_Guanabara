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
$v= array (2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K",1=>"h",7=>68);
print_r($v);
echo "<br/><h2>KSORT::::</h2>";
ksort($v);
print_r($v);

echo "<br/><h2>KRSORT::::</h2>";
krsort($v);
print_r($v);

?>
    </pre>
</div>
</body>
</html>


