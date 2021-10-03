<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto final cursoemvideo php POO</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Video.php';
        require_once 'Aluno.php';
        require_once 'Visualizacao.php';

        $aluno = new Aluno("Hugo",33,"M","snake");
        //$aluno->ganharExp(99);        //metodo ganharExp é protegido, não pode ser usado assim
        $aluno->setTotal(10);
 
        $video = new Video("POO 1");
        $video->setAvaliacao(5);
        $video->setViews(20);
        $video->setLikes(19);
        $video->setReproduzir(true);
        
        $video->play();
        $video->like();

        $video2 = new Video("POO 2");
/*
        print_r($aluno);
        print_r($video);
        print_r($video2);
*/
        //testes com array de v[]
        $v[0]= new Video("Aula 1 de POO");
        $v[1]= new Video("Aula 12 de PHP");
        $v[2]= new Video("Aula 15 de HTML");

        $p[0]= new Aluno("Jubileu",22,"M","juba");
        $p[1]= new Aluno("Creuza",52,"F","creuzita");
/*
        print_r($v);
        print_r($p);
*/
        //testes vetor visualizacao
        $vis[0]= new Visualizacao($p[1],$v[2]);
        $vis[1]=new Visualizacao($aluno,$video);
        $vis[2]=new Visualizacao($aluno,$v[0]);
        $vis[3]=new Visualizacao($aluno,$v[1]);

        $vis[0]->avaliar();
        $vis[1]->avaliarPer(85);
        $vis[2]->avaliarNota(10);

        print_r($vis);

    ?>

    </pre>
    
</body>
</html>