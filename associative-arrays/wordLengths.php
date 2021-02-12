<?php

/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/word-lengths
Write a method word_lengths that takes in a sentence string and returns a hash where every key is a word of the sentence, and its' corresponding value is the length of that word.
*/
function wordLengths($sentence)
{
    $words = explode(' ', $sentence);
    $lengths = [];
    foreach ($words as $word) {
        $lengths[$word] = strlen($word);
    }
    return $lengths;
}
#print_r(wordLengths("this is fun")); #=> {"this"=>4, "is"=>2, "fun"=>3}
#print_r(wordLengths("When in doubt, leave it out")); #=> {"When"=>4, "in"=>2, "doubt,"=>6, "leave"=>5, "it"=>2, "out"=>3}
