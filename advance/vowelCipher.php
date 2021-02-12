<?php

/*
Write a method vowel_cipher that takes in a string and returns a new string where every vowel becomes the next vowel in the alphabet.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/vowel-cipher
*/
function vowelCipher($string)
{
    $vowels = "aeiou";
    $cipher = '';
    for ($index = 0; $index < strlen($string); $index++) {
        $char = $string[$index];
        if (strpos($vowels, $char) !== false) {
            $oldPosition =  strpos($vowels, $char);
            $newPosition = $oldPosition + 1;
            $cipher = $cipher . $vowels[$newPosition % strlen($vowels)];
        } else {
            $cipher = $cipher . $char;
        }
    }
    return $cipher;
}

// echo vowelCipher("bootcamp") . "\n"; #=> buutcemp
// echo vowelCipher("paper cup") . "\n"; #=> pepir cap
