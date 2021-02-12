<?php

/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/first-half
Write a method first_half(array) that takes in an array and returns a new array containing the first half of the elements in the array. If there is an odd number of elements, return the first half including the middle element.
*/

function firstHalf($a)
{
    $firstHalfArray = [];

    for ($i = 0; $i < count($a) / 2; $i++) {
        $firstHalfArray[] = $a[$i];
    }
    return $firstHalfArray;
}
