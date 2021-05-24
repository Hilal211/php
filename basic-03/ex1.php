<?php
function personal_details($info){
    foreach ( $info as $key => $value )
{
echo "$key=$value\n";
}
}


personal_details(array("name" => "Rajesh Rao", "occupation" => "Engineer", age => 39, "country" => "India"));
?>