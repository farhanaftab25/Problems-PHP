<?php

/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/unique-elements
Write a method unique_elements that takes in an array and returns a new array where all duplicate elements are removed. Solve this using a hash.
*/

function uniqueElements($arr)
{
    $hash1 = [];
    foreach ($arr as $value) {
        $hash1[$value] = 0;
    }
    return array_keys($hash1);
}
