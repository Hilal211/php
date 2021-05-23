<?php 
$birth_year=rand(1980,2021);
$current_year=2021;
$diff=$current_year-$birth_year;  
if($diff>18){
    echo "You can drive";
}
else{
    echo "You still a kid, go and play GTA";
}
?>