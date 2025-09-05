<?php
//clase: molde para crear mas objetos

class Carro{
    //atributos o propiedades (variables)
    public $color = "rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 500;
    public $caballaje = 300;
    public $puestos = 2;


    //metodo -> acciones que hace (en este caso el carro), anteriormente conocidas como funciones

    public function getColor(){
        return $this ->color;
    }

    public function setColor($color){
        $this ->color = $color;
    }

    public function getVelocidad(){
        return $this ->velocidad;
    }

    public function setVelocidad($velocidad){
        $this->velocidad = $velocidad;
    }

    public function acelerar(){
        $this->velocidad+=5;
    }
    

    public function frenar (){
        $this->velocidad--;
    }
    
}

//instansear la clase / crear un objeto 
$carroEspecial = new Carro();

// var_dump($carroEspecial);
echo "la velocdiad de mi carro es:" .$carroEspecial->getVelocidad().'<br>';

echo "el color de mi carro es: " .$carroEspecial->getColor().'<br>';

$carroEspecial->setColor('amarillo');

echo $carroEspecial->getColor().'<br>';

$carroEspecial->acelerar();

echo "Ahora la velocdiad de mi carro es:" .$carroEspecial->getVelocidad().'<br>';

$carroEspecial->frenar();

echo "Ahora frene y la velocdiad de mi carro es:" .$carroEspecial->getVelocidad().'<br>';