<?php

/*
Write a method anagrams? that takes in two words and returns a boolean indicating whether or not the words are anagrams. Anagrams are words that contain the same characters but not necessarily in the same order. Solve this without using .sort
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/anagrams
*/


function anagrams($word1, $word2)
{
    return charCount($word1) == charCount($word2);
}

function charCount($word)
{
    $count = [];
    for ($i = 0; $i < strlen($word); $i++) {
        $char = $word[$i];
        if (strpos($word, $char) !== false) {
            $count[$char] = 0;
        }
        $count[$char] += 1;
    }
    return $count;
}
var_dump(anagrams("cat", "act"));          #=> true
var_dump(anagrams("restful", "fluster"));  #=> true
var_dump(anagrams("cat", "dog"));          #=> false
var_dump(anagrams("boot", "bootcamp"));    #=> false
