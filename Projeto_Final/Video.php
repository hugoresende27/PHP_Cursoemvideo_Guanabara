<?php
require_once'AccoesVideo.php';
class Video implements AcoesVideo
{
    private $titulo;            //encapsulamento, atributos em privado
    private $avaliacao;
    private $views;
    private $likes;
    private $reproduzir;

    //contrutor
    public function __construct($titulo)
    {
        $this->titulo=$titulo;
        $this->setViews(1);
        $this->setLikes(0);
        $this->setReproduzir(false);
        $this->avaliacao=0;
        
    }

    //getters e setters 
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }

    public function setAvaliacao($ava) {
        $media =($this->avaliacao+$ava) / $this->views;
        $this->avaliacao = $media;
    }

    public function getViews() {
        return $this->views;
    }

    public function setViews($views) {
        $this->views = $views;
    }

    public function getLikes() {
        return $this->likes;
    }

    public function setLikes($likes) {
        $this->likes = $likes;
    }

    public function getReproduzir() {
        return $this->reproduzir;
    }

    public function setReproduzir($reproduzir) {
        $this->reproduzir = $reproduzir;
    }

    //metodos abstratos sobreescritos na interfaca aka classe AccoesVideo
    function play()
    {
        $this->reproduzir=true;      
    }
    function pause()
    {
         $this->reproduzir=false;    
    }
    function like()
    {
        $this->likes++;
    }
}

?>