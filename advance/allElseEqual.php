<?php

/*
Write a method all_else_equal that takes in an array of numbers. The method should return the element of the array that is equal to half of the sum of all elements of the array. If there is no such element, the method should return nil.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/all-else-equal
*/
function allElseEqual($arr)
{
    $sum = array_sum($arr);
    foreach ($arr as $number) {
        if ($sum / 2 == $number) {
            return $number;
        }
    }
    return null;
}

echo allElseEqual([2, 4, 3, 10, 1]) . "\n"; #=> 10, because the sum of all elements is 20
echo allElseEqual([6, 3, 5, -9, 1]) . "\n"; #=> 3, because the sum of all elements is 6
var_dump(allElseEqual([1, 2, 3, 4])) . "\n";     #=> null
