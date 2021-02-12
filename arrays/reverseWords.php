<?php

// Write a method reverse_words that takes in a sentence string and returns the sentence with the order of the characters in each word reversed. Note that we need to reverse the order of characters in the words, do not reverse the order of words in the sentence.
// https://open.appacademy.io/learn/full-stack-online/intro-to-programming/reverse-words

function reverseWord($sent)
{
    $r_w = [];
    foreach (explode(' ', $sent) as $word) {
        $r_w[] = strrev($word);
    }
    return implode(' ', $r_w);
}
