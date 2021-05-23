<?php
$grocery=array("Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon");
echo "Hello Sir, do you have $grocery[0] , $grocery[1], and $grocery[2]? Also if you sell fruits can I find a $grocery[5]?"; 

$food=array(
array( 'balade', 'mazere3'),
array('Fresh', 'Taanayel'),
array('Tanoureen', 'Reem')
);
echo '<br>Hey Sir, Please I need 1 pack of ' . $food[0][0] . ' eggs and 3 ' . $food[2][1] . ' Water Pack.';
?>