<?php

/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/odd-range
Write a method odd_range(min, max) that takes in two numbers min and max. The method should return an array containing all odd numbers from min to max (inclusive).
*/
function oddRange($min, $max)
{
    $range = [];
    while ($min <= $max) {
        if ($min % 2 == 1) {
            $range[] = $min;
        }
        $min += 1;
    }
    return $range;
}
