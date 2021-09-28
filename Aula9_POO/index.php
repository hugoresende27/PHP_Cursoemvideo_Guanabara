<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 9 POO Exercicio</title>
</head>
<body>
<pre>
<?php
    require_once 'Livro.php';
    require_once 'Pessoa.php';

    $pessoa[0] = new Pessoa("Hugo", 32, "M");
    $pessoa[1] = new Pessoa("Rita", 29, "F");
    $pessoa[2] = new Pessoa("Saro", 19, "M");

    $livro[0] = new Livro("PHP Básico", "José da Silva",300, $pessoa[0]);
    $livro[1] = new Livro("Python", "Maria da Fonseca",170, $pessoa[0]);
    $livro[2] = new Livro("Dumbers", "Josefina Trie",220, $pessoa[1]);
    $livro[3] = new Livro("Lenixo", "Asarad Fonix",79, $pessoa[2]);

    $livro[0]->abrir();
    $livro[0]->folhear(300);
    $livro[0]->detalhes();
    $livro[0]->avancarPag();
    $livro[0]->detalhes();
    $livro[0]->voltarPag();
    $livro[0]->detalhes();

    $livro[3]->detalhes();
    $livro[3]->folhear(79);
    $livro[3]->voltarPag();
    $livro[3]->detalhes();

    /*
    Zona de testes
    print_r($livro[0]);
    print_r($livro[1]);
    print_r($livro[2]);
    print_r($livro[3]);

    */
?>
</pre>
    
</body>
</html>