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


foreach($transactions as $per){
foreach($per as $key => $value){
    echo $value["debit"]-$value["credit"] . "<br>";
}

}


foreach( $transactions as $transaction ) {
 
    $new_transaction[ "amount" ] = abs( $transaction[ "debit" ] - $transaction[ "credit" ] );
    $new_transactions[] = $new_transaction;
}



?>