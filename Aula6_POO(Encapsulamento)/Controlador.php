<?php

interface Controlador 
{
    public  function ligar();       //abstract significa que o código não está na interface
    public  function desligar();
    public  function abrirMenu();
    public  function fecharMenu();
    public  function maisVolume();
    public  function menosVolume();
    public  function ligarMudo();
    public  function desligarMudo();
    public  function play();
    public  function pause();

}


?>