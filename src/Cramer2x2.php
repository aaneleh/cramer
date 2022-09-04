<?php

//objeto da classe Matriz2D, responsável por calcular o determinante
require_once('Matriz2D.php');

class Cramer2x2 {
    
    //pra fazer cramer (2x2) precisa da matriz 2x2 (4 valores) e os resultados (2 valores)
    /*  x1 y1 = result1
        x2 y2 = result2 */
    
    private $x; 
    private $y; 
    private $x1; 
    private $y1; 
    private $x2; 
    private $y2; 
    private $result1; 
    private $result2;

    private $matriz;

    //construtor
    public function __construct($x1, $y1, $x2, $y2, $result1, $result2){
        $this->x1 = $x1;
        $this->y1 = $y1;
        $this->x2 = $x2;
        $this->y2 = $y2;
        $this->result1 = $result1;
        $this->result2 = $result2;
        //matriz é instanciada só no resultado caso o usuario queira modificar os valores
    }

    //getters
    public function getX(){
        return $this->x;
    }
    public function getY(){
        return $this->y;
    }
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
    public function getResult1(){
        return $this->result1;
    }
    public function getResult2(){
        return $this->result2;
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
    public function setResult1($result1){
        $this->result1 = $result1;
    }
    public function setResult2($result2){
        $this->result2 = $result2;
    }

    public function ehDeterminado(){
        $this->matriz = new Matriz2D($this->x1, $this->y1, $this->x2, $this->y2);
        if($this->matriz->calcularDeterminante() != 0){
            return true;
        }
        return false;
    }

    public function calcular(){
        if($this->ehDeterminado()){
            //delta
            $this->matriz = new Matriz2D($this->x1, $this->y1, $this->x2, $this->y2);
            $delta = $this->matriz->calcularDeterminante();
            //delta X
            $this->matriz->setX1($this->result1);
            $this->matriz->setX2($this->result2);
            $deltaX = $this->matriz->calcularDeterminante();
            //delta Y 
            $this->matriz->setX1($this->x1);
            $this->matriz->setX2($this->x2);
            $this->matriz->setY1($this->result1);
            $this->matriz->setY2($this->result2);
            $deltaY = $this->matriz->calcularDeterminante();

            $this->x = $deltaX / $delta;
            $this->y = $deltaY / $delta;
            return true;

        } return false;
    }

}
?>