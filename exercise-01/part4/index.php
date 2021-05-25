<?php

$arrayInfo=Array (
"musicals" => Array ( "Oklahoma","The Music Man", "South Pacific" ), 
"dramas" => Array ( "Lawrence of Arabia", "To Kill a Mockingbird","Casablanca"), 
"mysteries" => Array ("The Maltese Falcon","Rear Window", "North by Northwest" )

);


foreach($arrayInfo as $key=>$value){
    echo "<div style=text-transform:uppercase;>".$key."</div>";

    foreach($value as $kkey=>$vvalue ){
        echo "----> ".$kkey." = ".$vvalue."<br>";
    }
}




?>