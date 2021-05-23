<?php
function replacephp($input){
    if(strlen($input)<1000){
       return $input=str_replace("Python","PHP",$input);
    }
    else{
        return "erro many charecter";
    }
}

echo replacephp("hello Python world")
?>  