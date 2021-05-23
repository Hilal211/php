<?php
function countWord ($s,$w){
    $x=0;
    $c=0;
    $arrayS=explode(" ",$s);
    while($x<count($arrayS)){
        if($arrayS[$x]==$w){
        $c++;
        }   
        $x++;
    }
    return $c;
} 

echo countWord("hello haw hello hello","hello");
?>