<?php

/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/reverse-range
Write a method reverse_range(min, max) that takes in two numbers min and max. The function should return an array containing all numbers from min to max in reverse order. The min and max should be excluded from the array
*/
function reverseRange($min, $max)
{
    $range = [];

    $min = $min + 1;
    while ($max > $min) {
        $max = $max - 1;
        $range[] = $max;
    }
    return $range;
}

print_r(reverseRange(10, 17));
