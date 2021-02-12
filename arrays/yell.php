<?php
/*
Write a method yell(words) that takes in an array of words and returns a
new array where every word from the original array has an exclamation point after it.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/yell
*/
function yell($words)
{
    $yelledWords = [];
    foreach ($words as $word) {
        $yelledWords[] = $word . '!';
    }
    return $yelledWords;
}
