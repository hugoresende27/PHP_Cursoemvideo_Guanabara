<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
<body>
    <pre>
    <?php
        require_once "Conta.php";
        $conta1= new Conta(1,"Prazo","Hugo");
        echo "\n{$conta1->getSaldo()}\n\n\n" ;

        $conta1->mensalidade();

        print_r($conta1);



    ?>
    </pre>
</body>
</html>