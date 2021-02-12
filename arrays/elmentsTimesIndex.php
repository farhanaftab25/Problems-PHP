<?php

/*
Write a method element_times_index(nums) that takes in an array of numbers and returns a new array containing every number of the original array multiplied with its index.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/element-times-index
*/
function elementTimesIndex($numbers)
{
    $elementTimesNumbers = [];
    foreach ($numbers as $index => $number) {
        $elementTimesNumbers[] = $number * $index;
    }
    return $elementTimesNumbers;
}
