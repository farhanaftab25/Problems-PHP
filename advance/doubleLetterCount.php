<?php

/*
Write a method that takes in a string and returns the number of times that the same letter repeats twice in a row.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/double-letter-count
*/

function doubleLetterCount($word)
{
    $counter = 0;
    for ($index = 1; $index < strlen($word); $index++) {

        $currChar = $word[$index];
        $oldChar = $word[$index - 1];

        if ($currChar == $oldChar) {
            $counter += 1;
        }
    }
    return $counter;
}
// echo doubleLetterCount("the jeep rolled down the hill") . "\n"; #=> 3
// echo doubleLetterCount("boootcamop") . "\n"; #=> 1
