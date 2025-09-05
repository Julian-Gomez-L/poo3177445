<?php
//clase: molde para crear mas objetos

class Carro{
    //atributos o propiedades (variables)
    public $color = "rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $puestos = 2;
}

//instansear la clase / crear un objeto 
$carroEspecial = new Carro();

var_dump($carroEspecial);