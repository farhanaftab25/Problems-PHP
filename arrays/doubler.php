<?php

/*
problem-stmt:-
Write a method doubler(numbers) that takes an array of numbers and returns a new array
where every element of the original array is multiplied by 2.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/doubler
*/
function doubler($list)
{
    $doubledNumbers = [];
    foreach ($list as $element) {
        $doubledNumbers[] = $element * 2;
    }
    return $doubledNumbers;
}
