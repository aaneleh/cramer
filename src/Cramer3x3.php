<?php

require_once('Matriz3D.php');

class Cramer3x3 {

    private $x1; 
    private $y1; 
    private $z1; 

    private $x2; 
    private $y2; 
    private $z2; 

    private $x3; 
    private $y3; 
    private $z3; 

    private $result1; 
    private $result2;
    private $result3;

    private $x; 
    private $y; 
    private $z; 

    private $matriz;

    //construtor
    public function __construct($x1, $y1, $z1, $x2, $y2, $z2, $x3, $y3, $z3, $result1, $result2, $result3){
        $this->x1 = $x1;
        $this->y1 = $y1;
        $this->z1 = $z1;
        $this->x2 = $x2;
        $this->y2 = $y2;
        $this->z2 = $z2;
        $this->x3 = $x3;
        $this->y3 = $y3;
        $this->z3 = $z3;
        $this->result1 = $result1;
        $this->result2 = $result2;
        $this->result3 = $result3;
    }
    public function getX(){ return $this->x; }
    public function getY(){ return $this->y; }
    public function getZ(){ return $this->z; }
    //getters
    public function getX1(){ return $this->x1; }
    public function getY1(){ return $this->y1; }
    public function getZ1(){ return $this->z1; }
    public function getX2(){ return $this->x2; }
    public function getY2(){ return $this->y2; }
    public function getZ2(){ return $this->z2; }
    public function getX3(){ return $this->x3; }
    public function getY3(){ return $this->y3; }
    public function getZ3(){ return $this->z3; }
    //setters
    public function setX1($x1){ $this->x1 = $x1; }
    public function setY1($y1){ $this->y1 = $y1; }
    public function setZ1($z1){ $this->z1 = $z1; }
    public function setX2($x2){ $this->x2 = $x2; }
    public function setY2($y2){ $this->y2 = $y2; }
    public function setZ2($z2){ $this->z2 = $z2; }
    public function setX3($x3){ $this->x3 = $x3; }
    public function setY3($y3){ $this->y3 = $y3; }
    public function setZ3($z3){ $this->z3 = $z3; }
    
    public function ehDeterminado(){
        $this->matriz = new Matriz3D($this->x1, $this->y1, $this->z1, $this->x2, $this->y2, $this->z2, $this->x3, $this->y3, $this->z3);
        if($this->matriz->calcularDeterminante() != 0){
            return true;
        }
        return false;
    }

    public function calcular(){
        //delta
        if($this->ehDeterminado()){
            $this->matriz = new Matriz3D($this->x1, $this->y1, $this->z1, $this->x2, $this->y2, $this->z2, $this->x3, $this->y3, $this->z3);
            $delta = $this->matriz->calcularDeterminante();
            //delta X
            $this->matriz = new Matriz3D($this->result1, $this->y1, $this->z1, $this->result2, $this->y2, $this->z2, $this->result3, $this->y3, $this->z3);
            $deltaX = $this->matriz->calcularDeterminante();
            //delta Y 
            $this->matriz = new Matriz3D($this->x1, $this->result1, $this->z1, $this->x2, $this->result2, $this->z2, $this->x3, $this->result3, $this->z3);
            $deltaY = $this->matriz->calcularDeterminante();
            //delta Z 
            $this->matriz = new Matriz3D($this->x1, $this->y1, $this->result1, $this->x2, $this->y2, $this->result2, $this->x3, $this->y3, $this->result3);
            $deltaZ = $this->matriz->calcularDeterminante();
    
            $this->x = $deltaX / $delta;
            $this->y = $deltaY / $delta;
            $this->z = $deltaZ / $delta;
            return true;
        }
        return false;
    }

}

?>