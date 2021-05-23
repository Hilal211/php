<?php
function palindrome($word){
    $word2=strrev($word);
    if($word==$word2){
        return 1;
    }
    return 0;
}

echo palindrome('madam');
?>