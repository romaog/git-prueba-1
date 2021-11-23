<?php

class Saludo{
    private $saludo;
    function __construct(){

        $this->saludo= "hola $nombre";
    }
    function saludar(){
        echo  $this-> saludo;
    }
}