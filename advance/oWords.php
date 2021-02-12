<?php

/*
Write a method o_words that takes in a sentence string and returns an array of the words that contain an "o". Use select in your solution!
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/o-words
*/


function oWords($sentence)
{
    $words = explode(' ', $sentence);
    return array_filter($words, function ($word) {
        return strpos($word, 'o') !== false;
    });
}


#print_r(oWords("How did you do that?")); #=> ["How", "you", "do"]
