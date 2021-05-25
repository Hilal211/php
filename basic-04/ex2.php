<?php
class MyClass{
    private $name;

    function __construct($name){
        $this->name=$name;
    }

    function print(){
        echo "<p style=color:red;>Hello All, I am ".$this->name."</p>";
    
    }
}
$f=new MyClass("Hilal");
$f->print();

?>