<?php
class MyCalculator{

    private $n1;
    private $n2;

    function __construct($n1,$n2){
        $this->n1=$n1;
        $this->n2=$n2;
    }

    function multiply(){
       echo "<p>".$this->n1."x".$this->n2."=<span style=color:red>".$this->n1*$this->n2."</span></p>";

    }

    function add(){
        $r=($this->n1)+($this->n2);
        echo "<p>".$this->n1."+".$this->n2."=<span style=color:red>".$r."</span></p>";
 
     }

     function subtract(){
         $r=$this->n1-$this->n2;
        echo "<p>".$this->n1."-".$this->n2."=<span style=color:red>".$r."</span></p>";
 
     }

     function divide(){
        echo "<p>".$this->n1."/".$this->n2."=<span style=color:red>".$this->n1/$this->n2."</span></p>";
 
     }
}

$f=new MyCalculator(4,2);
$f->multiply();
$f->add();
$f->subtract();
$f->divide();
?>