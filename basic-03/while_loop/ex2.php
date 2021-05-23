<?php
function factorial($n){
    $x=1;
    $r=1;
    while($x<=$n){
        $r*=$x;
        $x++;
    }
    echo $r;
}

factorial(6);
?>