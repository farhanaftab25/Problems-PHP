<?php

/*
Write a method adjacent_sum that takes in an array of numbers and returns a new array containing the sums of adjacent numbers in the original array. See the examples.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/adjacent-sum
*/
function adjacentSum($arr)
{
    $newArr = [];
    for ($index = 1; $index < count($arr); $index++) {
        $newArr[] = $arr[$index] + $arr[$index - 1];
    }
    return $newArr;
}
