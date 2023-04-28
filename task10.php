<?php

class Calculator {

    private $num1;
    private $num2;

    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    public function add() {
        $this->num1 += $this->num2;
        return $this;
    }
    public function subtract() {
        $this->num1 -= $this->num2;
        return $this;
    }
    public function multiply() {
        $this->num1 *= $this->num2;
        return $this;
    }
    public function divide() {
        if ($this->num2 == 0){
            return "Error";
        }
        else {
            $this->num1 /= $this->num2;
            return $this;  
        }
        
    }
    public function divideBy($num) {
        if ($num == 0) {
          return "Error: division by zero";
        } else {
          $this->num1 /= $num;
          return $this;
        }
    }
    public function multiplyBy($num) {
        $this->num1 *= $num;
        return $this;
    }
    public function addBy($num) {
        $this->num1 += $num;
        return $this;
    }
    public function subtractBy($num) {
        $this->num1 -= $num;
        return $this;
    }
    public function out() {
        return $this->num1;
    }
}

$calc = new Calculator(21,3);
echo $calc->add()->divideBy(8)->multiplyBy(9)->subtractBy(27)->out();

?>