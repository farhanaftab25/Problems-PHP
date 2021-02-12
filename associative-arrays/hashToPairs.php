<?php

/*
Write a method hash_to_pairs that takes in a hash and returns a 2D array representing each key-value pair of the hash.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/hash-to-pairs
*/

function hashToPairs($hash1)
{
    $newArr = [];
    foreach ($hash1 as $key => $value) {
        $newArr[] = [$key, $value];
    }
    return $newArr;
}
