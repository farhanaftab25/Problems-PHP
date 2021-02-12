<?php

/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/last-index
Write a method last_index that takes in a string and a character. The method should return the last index where the character can be found in the string.
*/

function lastIndex($str, $char)
{
    for ($index = strlen($str) - 1; $index >= 0; $index--) {
        if ($str[$index] == $char) return $index;
    }
}



echo lastIndex("abca", "a") . "\n";        #=> 3
echo lastIndex("mississipi", "i") . "\n";  #=> 9
echo lastIndex("octagon", "o") . "\n";     #=> 5
echo lastIndex("programming", "m") . "\n"; #=> 7
