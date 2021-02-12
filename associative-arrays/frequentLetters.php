<?php

/*
Write a method frequent_letters that takes in a string and returns an array containing the characters that appeared more than twice in the string.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/frequent-letters
*/
function frequentLetters($string)
{
    $hash1 = [];
    $frequentLetters = [];
    for ($index = 0; $index < strlen($string); $index++) {
        $char = $string[$index];
        if (!array_key_exists($char, $hash1)) {
            $hash1[$char] = 0;
        }
        $hash1[$char] += 1;
        if ($hash1[$char] > 2 && !in_array($char, $frequentLetters)) {
            $frequentLetters[] = $char;
        }
    }
    // print_r($hash1);
    return $frequentLetters;
}


print_r(frequentLetters('mississippi')); #=> ["i", "s"]
print_r(frequentLetters('bootcamp')); #=> []
