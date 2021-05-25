<?php
$transactions = array(
    array(
        "id" => 1,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    array(
       "id" => 3,
       "name"=> "Omar",
       "email"=> "omar@codi.tech"
    )
);
foreach($transactions as $row => $innerArray)
{
  foreach($innerArray as $innerRow => $value)
  {

    echo $innerRow." : " . $value ;
    if ($innerRow !="email"){
      echo ", ";   };
  }
  echo "<br>";
}
?>