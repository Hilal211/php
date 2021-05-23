<?php
function prime($n){
    $x=2;
    while($x<$n){
        if($n%$x==0){
            return 0;
        }
        $x++;
    }
    return 1;
}
echo prime(7)
?>