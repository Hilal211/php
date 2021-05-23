<?php 
function countD ($s){
    $c=0;
for($i=0;$i<strlen($s);$i++){
$c+=$s[$i];
}
return $c;
}

echo countD("123");
?>