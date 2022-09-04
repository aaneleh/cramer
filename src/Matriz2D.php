<?php

class Matriz2D {
    
    //matriz com duas dimenções
    private $x1; 
    private $y1; 
    private $x2; 
    private $y2; 

    //construtor
    public function __construct($x1, $y1, $x2, $y2){
        $this->x1 = $x1;
        $this->y1 = $y1;
        $this->x2 = $x2;
        $this->y2 = $y2;
    }

    //getters
    public function getX1(){
        return $this->x1;
    }
    public function getY1(){
        return $this->y1;
    }
    public function getX2(){
        return $this->x2;
    }
    public function getY2(){
        return $this->y2;
    }
    //setters
    public function setX1($x1){
        $this->x1 = $x1;
    }
    public function setY1($y1){
        $this->y1 = $y1;
    }
    public function setX2($x2){
        $this->x2 = $x2;
    }
    public function setY2($y2){
        $this->y2 = $y2;
    }
    
    //calcular o determinante
    /*  x1 y1
        x2 y2  */
    public function calcularDeterminante(){
        $principal = $this->x1 * $this->y2;
        $secundaria = $this->x2 * $this->y1;
        return $principal - $secundaria;
    }

}

?>