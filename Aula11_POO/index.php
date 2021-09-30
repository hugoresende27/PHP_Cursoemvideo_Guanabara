<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 HERANÇAS</title>
</head>
<body>
<pre>
<?php
    //require_once 'Pessoa.php';
    require_once 'Visitante.php';
    require_once 'Aluno.php';
    require_once 'Bolsista.php';
    require_once 'Tecnico.php';
    require_once 'Professor.php';

    //$p1=new Pessoa();       // Cannot instantiate abstract class Pessoa ERRO
    
    $v1=new Visitante();
    $v1->setNome("Fred");
    $v1->setIdade(33);
    $v1->setSexo("MACHO");
    
    $a1=new Aluno();
    $a1->setNome("Hugo");
    $a1->setIdade(32);
    $a1->setSexo("MACHO");
    $a1->setMat(122);
    $a1->setCurso("Informática");
    $a1->pagarMensal();

    $b1=new Bolsista();
    $b1->setNome("Rita");
    $b1->setIdade(21);
    $b1->setSexo("FEMEA");
    $b1->setBolsa(12.5);
    $b1->setMat(999);
    $b1->setCurso("Enfermagem");
    $b1->renovarBolsa();
    $b1->pagarMensal();

    $alunoTec=new Tecnico();
    $alunoTec->setNome("Ze");
    $alunoTec->setIdade(22);
    $alunoTec->setSexo("HOMEM");
    $alunoTec->pagarMensal();

    $p3= new Professor();
    $p3->setNome("Gil0");
    $p3->setIdade(55);
    $p3->setSalario(2000);
    $p3->setMateria("PHP");

   

    print_r($v1);
    print_r ($a1);
    print_r($b1);
    print_r($alunoTec);
    print_r($p3);

?>
</pre>
</body>
</html>