<?php

class Adios{
    private $adios;
    function __construct($name){

        $this->adios= "adios $name";
    }
    function adios(){
        echo  $this-> adios;
    }
}