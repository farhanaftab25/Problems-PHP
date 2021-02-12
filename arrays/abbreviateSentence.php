<?php

/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/abbreviate-sentence
Write a method abbreviate_sentence that takes in a sentence string and returns a new sentence where every word longer than 4 characters has all of it's vowels removed.
*/
function abbreviateSentence($sent)
{
    $parts = explode(' ', $sent);
    $removed = [];
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    foreach ($parts as $part) {
        if (strlen($part) > 4) {
            $removed[] =  str_replace($vowels, "", $part);
        } else {
            $removed[] =  $part;
        }
    }
    return implode(' ', $removed);
}
