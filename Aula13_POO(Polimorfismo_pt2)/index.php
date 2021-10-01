<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 Polimorfismo Pt2</title>
</head>
<body>

<pre>
<?php
    require_once 'Mamifero.php';
    require_once 'Lobo.php';
    require_once 'Cao.php';

    $a = new Mamifero();
    $b = new Lobo();
    $c= new Cao();

    $a->som();          //metodo sobreposto, abstrato na superclasse e escrito com a mesma assinatura em cada subclasse
    $a->setIdade(10);
    echo "<br>".$a->getIdade()." anos";

    $b->som();

    $c->som();

    $c->reagirFrase("Comida");      //No php não existe sobrecarga, uma maneira simples de implementar é criar metodos com nomes diferentes na classe Cao
    $c->reagirDono(true);
    $c->reagirHora(10,30);
    $c->reagirIP(3,20);
    echo "<br>";
    //echo ($b);

?>

</pre>
    
</body>
</html>