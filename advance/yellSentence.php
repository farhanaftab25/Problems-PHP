<?php

/*
Write a method yell_sentence that takes in a sentence string and returns a new sentence where every word is yelled. See the examples. Use map to solve this.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/yell-sentence
*/

function yellSentence($sent)
{
    $words = explode(' ', $sent);
    $mappedArray = array_map(function ($word) {
        return strtoupper($word . '!');
    }, $words);
    return implode(' ', $mappedArray);
}

#print_r(yellSentence("I have a bad feeling about this"));
