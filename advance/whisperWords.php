<?php

/*
Write a method whisper_words that takes in an array of words and returns a new array containing a whispered version of each word. See the examples. Solve this using map :).
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/whisper-words
*/

function whisperWords($words)
{
    return array_map(function ($word) {
        return strtolower($word . '...');
    }, $words);
}
#print_r(whisperWords(["KEEP", "The", "NOISE", "down"])); # => ["keep...", "the...", "noise...", "down..."]
