<?php

/*
Write a method caesar_cipher that takes in a string and a number. The method should return a new string where every character of the original is shifted num characters in the alphabet.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/caesar-cipher
*/
function caesarCipher($str, $num)
{
    $alphabet = "abcdefghijklmnopqrstuvwxyz";
    $cipher = '';
    for ($index = 0; $index < strlen($str); $index++) {
        $char = $str[$index];
        $oldPosition = strpos($alphabet, $char);
        $newPosition = $oldPosition + $num;
        $cipher = $cipher . $alphabet[$newPosition % 26];
    }
    return $cipher;
}
