<?php
//interface só tem a descrição dos metodos que serão publicos
interface Publicacao
{
    public function abrir();
    public function fechar();
    public function folhear($p);        //recebe a página em $p
    public function avancarPag();
    public function voltarPag();

}

?>