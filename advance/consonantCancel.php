<?php

/*
Write a method consonant_cancel that takes in a sentence and returns a new sentence where every word begins with it's first vowel.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/consonant-cancel
*/

function consonantCancel($sentence)
{
    $words = explode(' ', $sentence);
    return implode(' ', array_map('removeStartingConsonant', $words));
}
function removeStartingConsonant($word)
{
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    for ($index = 0; $index < strlen($word); $index++) {
        $char = $word[$index];
        if (in_array($char, $vowels)) {
            return substr($word, $index);
        }
    }
}
