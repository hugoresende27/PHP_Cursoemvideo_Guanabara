<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP H.R. 2021@</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <form method="get" action="form5.php">
        <?php
        $c=1;
        while ($c<=5) {
//atencão dentro do echo não pode haver "" mas sim ''
echo "
            valor $c:<input type = 'number' name = 'v$c' max = '100' min = '0' value = '0' ><br />
          ";            //valor $var e name='v$var' assim cria as variáveis, conteudos dinâmicos
$c++;
}

?>
        <input type = 'submit' value = 'Enviar' />
    </form>
</div>
</body>
</html>


