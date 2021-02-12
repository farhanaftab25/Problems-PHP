<?php

/*
Write a method triple_sequence that takes in two numbers, start and length. The method should return an array representing a sequence that begins with start and is length elements long. In the sequence, every element should be 3 times the previous element. Assume that the length is at least 1.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/triple-sequence
*/


function tripleSequence($start, $length)
{
    $newArr = [$start];
    for ($index = 0; $index < $length - 1; $index++) {
        $newArr[] = $newArr[$index] * 3;
    }
    return $newArr;
}

// print_r(tripleSequence(2, 4)); # => [2, 6, 18, 54]
// print_r(tripleSequence(4, 5)); # => [4, 12, 36, 108, 324]
