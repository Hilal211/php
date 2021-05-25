<?php
$transactions = array(
  array(
      "id" => 1,
      "debit"=>2,
      "credit"=>3
  ),
  array(
      "id" => 2,
      "debit"=>15,
      "credit"=>10
  )
);

$transactions = array_map(function($trans) {
  $trans['amount'] = abs($trans['debit'] - $trans['credit']);

  return $trans;
}, $transactions);
// var_dump($transactions);
foreach($transactions as $row => $innerArray){
  foreach($innerArray as $innerRow => $value){
    // echo $value . "<br/>";
    // echo "&nbsp;&nbsp;";
    if ($innerRow =="id" )
    {echo  strtoupper($innerRow)." : " . $value . " => ";};
    if ( $innerRow =="amount")
    {echo $innerRow." : " . $value ;
       echo "<br>";};
  }
}


?>