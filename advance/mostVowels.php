<?php

/*
Write a method most_vowels that takes in a sentence string and returns the word of the sentence that contains the most vowels.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/most-vowels
*/

function mostVowels($sentence)
{
    $words = explode(' ', $sentence);
    $count = [];
    foreach ($words as $word) {
        $count[$word] = countVowels($word);
    }
    asort($count);
    end($count);
    return key($count);
}
function countVowels($word)
{
    $count = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    for ($index = 0; $index < strlen($word); $index++) {
        if (in_array($word[$index], $vowels)) $count++;
    }
    return $count;
}
