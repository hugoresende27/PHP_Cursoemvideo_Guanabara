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

$n = array (array(2,3),
            array (3,4),
            array (9,5));
$n [2][0]= $n [1][1];
print_r($n);

?>
</pre>
</div>

</body>
</html>


