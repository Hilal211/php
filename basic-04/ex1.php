<?php
class MyClass{

    private $string_value;

    function __construct($string_value){
        $this->string_value=$string_value;
    }

    function customize_print(){
        echo "<p>".$this->string_value."</p>";
    }
}

$f=new MyClass("MyClass class has initialized !");
echo $f->customize_print();

?>