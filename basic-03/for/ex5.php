<?php
function reverseS($s){
    $n="";
    for($i=strlen($s);$i>=0;$i--){
        $n=$n . $s[$i];
    }
    return $n;
}

echo reverseS("hello hilal");
?>