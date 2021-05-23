<?php
function armstrong($num){
    $n1=$num%10;
    $n2=($num/10)%10;
    $n3=($num/100)%10;
    $var=$n3**3+$n2**3+$n1**3;
    if($num===$var){
        return "$num is armstrong";
    }else{
        return "$num isn't armstrong";
    }
}

echo armstrong(153);


?>