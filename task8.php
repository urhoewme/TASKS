<?php

class Matrix {
    private $matrix;
    private $rows;
    private $columns;
  
    public function __construct($rows, $columns) {
      $this->rows = $rows;
      $this->columns = $columns;
  
      for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $columns; $j++) {
          $this->matrix[$i][$j] = 0;
        }
      }
    }
  
    public function add(Matrix $other) {
      if ($this->rows !== $other->rows || $this->columns !== $other->columns) {
        throw new Exception('Matrices must have the same dimensions to be added');
      }
  
      $result = new Matrix($this->rows, $this->columns);
      for ($i = 0; $i < $this->rows; $i++) {
        for ($j = 0; $j < $this->columns; $j++) {
          $result->matrix[$i][$j] = $this->matrix[$i][$j] + $other->matrix[$i][$j];
        }
      }
      return $result;
    }
  
    public function multiply($scalar) {
      $result = new Matrix($this->rows, $this->columns);
      for ($i = 0; $i < $this->rows; $i++) {
        for ($j = 0; $j < $this->columns; $j++) {
          $result->matrix[$i][$j] = $this->matrix[$i][$j] * $scalar;
        }
      }
      return $result;
    }
  
    public function print() {
      for ($i = 0; $i < $this->rows; $i++) {
        for ($j = 0; $j < $this->columns; $j++) {
          echo $this->matrix[$i][$j] . " ";
        }
        echo "\n";
      }
    }

    public function fillMatrix() {
        for ($i = 0; $i < $this->rows; $i++) {
            for ($j = 0; $j < $this->columns; $j++) {
                echo "Enter values for matrix: ";
                $value = readline();
                $this->matrix[$i][$j] = $value;
            }
        }
    }

  }

  
$matrix = new Matrix(3, 3);
$matrix2 = new Matrix(3, 3);

$matrix->fillMatrix();
$matrix->print();
$matrix2->fillMatrix();
$matrix2->print();

$result = $matrix->add($matrix2);
$result->print();

$result = $matrix->multiply(3);
$result->print();

?>