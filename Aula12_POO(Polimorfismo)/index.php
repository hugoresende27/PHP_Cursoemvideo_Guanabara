<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 Polimorfismo</title>
</head>
<body>
    <pre>
    <?php
    require_once 'Ave.php';
    require_once 'Mamifero.php';
    require_once 'Reptil.php';
    require_once 'Peixe.php';

    require_once 'Cachorro.php';
    require_once 'Arara.php';
    require_once 'Tartaruga.php';
    require_once 'Goldfish.php';
    require_once 'Canguro.php';
    require_once 'Cobra.php';


    $Ave = new Ave();
    $Ave->fazerNinho();
    $Ave->mover();          //polimorfismo, metodo com a mesma assinatura, resultados diferentes
    $Ave->setPeso(100);
    $Ave->setMembros(3);
    $Ave->setIdade(10);
    $Ave->comer();
    $Ave->fazerSom();

    $cao=new Mamifero();
    $cao->mover();           //polimorfismo, metodo com a mesma assinatura, resultados diferentes
    $cao->setIdade(7);
    $cao->setPeso(14);
    $cao->fazerSom();

    $can=new Canguru();
    $snk=new Cobra();
    $ara=new Arara();
    $tar=new Tartaruga();
    $fre=new Cachorro();
    $can->mover();
    $fre->mover();  //aqui o metodo mover foi sobreposto na classe Cachorro ao metodo mover() na classe Animal
    $tar->mover();
    $snk->mover();    
    $ara->mover();
    $fre->fazerSom();
    $ara->fazerSom();
    $can->fazerSom();
    
    echo "<br>";
    //print_r($Ave);
    //print_r($cao);


?>
    </pre>
</body>
</html>