<?php

/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/select-long-words-walkthrough
Write a method select_long_words(words) that takes in an array of words and returns a new array containing all of the words of the original array that are longer than 4 characters.
*/
function selectLongWords($words)
{
    $longWords = [];
    foreach ($words as $word) {
        if (strlen($word) > 4) {
            $longWords[] = $word;
        }
    }
    return $longWords;
}
