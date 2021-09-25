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
        $conta1= new Conta();
        $conta1->abrirConta("Poupanca");
        $conta1->setDono("Fred");
        echo "\nSaldo de {$conta1->getDono()} é de {$conta1->getSaldo()} €€€\n";
        $conta1->mensalidade();
        echo "\nvalor após mensalidade é de {$conta1->getSaldo()}\n €€€";
        print_r($conta1);

        $p1 = new Conta();
        $p2 = new Conta();
        $p1->abrirConta("Prazo");
        $p1->setDono("Hugo Resende");
        $p1->setnumConta(1111);

        $p2->abrirConta("Poupanca");
        $p2->setDono("Creuza Teixeira");
        $p2->setnumConta(2222);
    
        echo "\n\tDEPOSITOS\n";
        $p1->depositar(300);
        $p2->depositar(500);
       
        
        echo "\n\tMensalidades\n";
        $p1->mensalidade();
        $p2->mensalidade();
        
        echo "\n\tLEVANTAMENTOS\n";
        $p2->levantar(1000); 
        $p1->levantar(330);
        $p2->levantar(638);

        echo "\n\tFECHO CONTAS\n";
        $p1->fecharConta();
        $p2->fecharConta();

        print_r($p1);
        print_r($p2);

    ?>
    </pre>
</body>
</html>