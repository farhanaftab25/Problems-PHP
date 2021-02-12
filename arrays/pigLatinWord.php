<?php

/*
Write a method pig_latin_word that takes in a word string and translates the word into pig latin.

# Pig latin translation uses the following rules:
# - for words that start with a vowel, add 'yay' to the end
# - for words that start with a nonvowel, move all letters before the first vowel to the end of the word and add 'ay'

https://open.appacademy.io/learn/full-stack-online/intro-to-programming/pig-latin-word
*/
function pigLatinWord($word)
{
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    if (in_array($word[0], $vowels)) {
        return $word . 'yay';
    }
    for ($i = 0; $i < strlen($word); $i++) {
        if (in_array($word[$i], $vowels)) {
            return substr($word, $i) . substr($word, 0, $i) . 'ay';
        }
    }
}
