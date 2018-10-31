<?php 

class Calculator{
        public $total = 0;

        function add($number){
            $this->total = $this->total + $number;
            return $this->total;
        }
        function subtract($number){
            $this->total = $this->total - $number;
            return $this->total;
        }

        function divide($number){
            $this->total = $this->total / $number;
            return $this->total;
        }

        function multiply($number){
            $this->total = $this->total * $number;
            return $this->total;
        }

}

$calculator = new Calculator();

?>

<p>Add 55 -> total <?= $calculator->add(55) ?></p>
<p>Add 9 to that -> total <?= $calculator->add(9) ?></p>
<p>Divide 2 with that -> total <?= $calculator->divide(2) ?></p>
<p>Subtract 2 to that -> total <?= $calculator->subtract(2) ?></p>
<p>Multiply 6 with that -> total <?= $calculator->multiply(6) ?></p>