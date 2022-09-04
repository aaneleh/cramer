<?php

class Matriz3D {
    
    //matriz 3x3
    private $x1; 
    private $y1; 
    private $z1; 

    private $x2; 
    private $y2; 
    private $z2; 

    private $x3; 
    private $y3; 
    private $z3; 

    //construtor
    public function __construct($x1, $y1, $z1, $x2, $y2, $z2, $x3, $y3, $z3){
        $this->x1 = $x1;
        $this->y1 = $y1;
        $this->z1 = $z1;
        $this->x2 = $x2;
        $this->y2 = $y2;
        $this->z2 = $z2;
        $this->x3 = $x3;
        $this->y3 = $y3;
        $this->z3 = $z3;
    }

    //getters
    public function getX1(){
        return $this->x1;
    }
    public function getY1(){
        return $this->y1;
    }
    public function getZ1(){
        return $this->z1;
    }
    public function getX2(){
        return $this->x2;
    }
    public function getY2(){
        return $this->y2;
    }
    public function getZ2(){
        return $this->z2;
    }
    public function getX3(){
        return $this->x3;
    }
    public function getY3(){
        return $this->y3;
    }
    public function getZ3(){
        return $this->z3;
    }
    //setters
    public function setX1($x1){
        $this->x1 = $x1;
    }
    public function setY1($y1){
        $this->y1 = $y1;
    }
    public function setZ1($z1){
        $this->z1 = $z1;
    }
    public function setX2($x2){
        $this->x2 = $x2;
    }
    public function setY2($y2){
        $this->y2 = $y2;
    }
    public function setZ2($z2){
        $this->z2 = $z2;
    }
    public function setX3($x3){
        $this->x3 = $x3;
    }
    public function setY3($y3){
        $this->y3 = $y3;
    }
    public function setZ3($z3){
        $this->z3 = $z3;
    }
    
    //calcular o determinante
    /*
        x1 y1 z1 | x1 y1
        x2 y2 z2 | x2 y2
        x3 y3 z3 | x3 y3
    */
    public function calcularDeterminante(){
        $principal = ($this->x1 * $this->y2 * $this->z3) + ($this->y1 * $this->z2 * $this->x3) + ($this->z1 * $this->x2 * $this->y3);
        $secundaria = ($this->x3 * $this->y2 * $this->z1) + ($this->y3 * $this->z2 * $this->x1) + ($this->z3 * $this->x2 * $this->y1);
        return $principal - $secundaria;
    }

}

?>