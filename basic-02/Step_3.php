<?php 
$var1=32;
$var2=45;

echo "befor $var1 $var2";
$var=$var2;
$var2=$var1;
$var1=$var;

echo "<br>After $var1 $var2";

?>