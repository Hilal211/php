<?php
function palindrome($word){
    $word=str_replace(" ","",$word);
    $word=strtolower($word);
    $rev=strrev($word);
    if($word===$rev){
        echo "<p>".$word." is palindrome</p>";
    }
    else{
        echo "<p>".$word." is not palindrome</p>";
    }
}

palindrome("moM");

?>