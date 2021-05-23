<?php
function greaterFn($num){
    if($num>30){
        return "$num is greater then 30";
    }
    elseif($num>20){
        return "$num is greater then 20";
    }
    elseif($num>10){
        return "$num is greater then 10";
    }
}
echo greaterFn(21);
?>