<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 POO</title>
</head>
<body>
<pre>
<?php
    require_once 'Pessoa.php';          //nem era necessário require_once Pessoa, porque aluno extend Pessoa
    require_once 'Aluno.php';
    require_once 'Professor.php';
    require_once 'Funcionario.php';

    //Programa Principal
    $p1= new Pessoa();
    $p2= new Aluno();
    $p3= new Professor();
    $p4= new Funcionario();

    $p1->setNome("Hugo");
    $p2->setNome("Rita");
    $p3->setNome("Fred");
    $p4->setNome("Zé");

    $p1->setSexo("Homem");
    $p2->setCurso("PHP");
    $p3->setSalario(1500);
    $p4->setSetor("Stock");

    //$p1->aumentar();      //vai dar erro, $p1 é uma pessoa e pessoa não tem aumento, apenas professor
    $p3->aumentar(1500);
    //$p2->mudar();         //vai dar erro, $p2 é Aluno, não Funcionário
    $p4->mudar("Aulas");        

    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);



?>
</pre>
</body>
</html>