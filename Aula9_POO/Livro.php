<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao
{
    private $titulo;        //private porque é encapsulamento
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function detalhes()
    {
        echo "<p>----------------------------------";
        echo "Livro ".$this->titulo." escrito por ".$this->autor;
        echo "<p>O livro tem ".$this->totPaginas." páginas e a página atual é a ".$this->pagAtual;
        echo  "<p>Está a ser lido por ".$this->leitor->getNome();
    }

    //contrutor
    function __construct($tit,$aut,$tot,$lei)
    {
        $this->titulo=$tit;
        $this->autor=$aut;
        $this->totPaginas=$tot;
        $this->leitor=$lei;
        $this->pagAtual=0;
        $this->aberto=false;
       
    }

    ///////////////////////getters
    function getTitulo()
    {
        return $this->titulo;
    }
    function getAutor()
    {
        return $this->autor;
    }
    function getTotPaginas()
    {
        return $this->totPaginas;
    }
    function getPagAtual()
    {
        return $this->pagAtual;
    }
    function getAberto()
    {
        return $this->aberto;
    }
    function getLeitor()
    {
        return $this->leitor;
    }
    /////////////////////////setters
    function setTitulo($t)
    {
        $this->titulo=$t;
    }
    function setAutor($a)
    {
        $this->autor=$a;
    }
    function setTotPaginas($tp)
    {
        $this->totPaginas=$tp;
    }
    function setPagAtual($p)
    {
        $this->pagAtual=$p;
    }
    function setAberto($ab)
    {
        $this->aberto=$ab;
    }
    function setLeitor($l)
    {
        $this->leitor=$l;
    }
    
    ///////////////////metodos abstractos
    function abrir()
    {
        $this->setAberto(true);
        //$this->aberto=true;
    }
    function avancarPag()
    {
        if ($this->pagAtual>=0 && $this->pagAtual<$this->totPaginas)
        {
            $this->pagAtual ++;
        }
        else
        {
            $this->pagAtual=0;
        }
        
    }
    function voltarPag()
    {
        if ($this->pagAtual>0 && $this->pagAtual<=$this->totPaginas)
        {
            $this->pagAtual --;
        }
        else
        {
            $this->pagAtual=0;
        }
        
    }
    function fechar()
    {
        $this->setAberto(false);
        //$this->aberto=false;
    }
    function folhear($p)
    {
        if ($p>$this->totPaginas)       //no caso da página exeder a ultima página
        {
            $this->pagAtual=0;
        }
        else
        {
            $this->setPagAtual($p);
            //$this->pagAtual = $p;
        }
        
    }
}