<?php

/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/factors-of
Write a method factors_of(num) that takes in a num and returns an array of all positive numbers less than or equal to num that can divide num.
*/

function factorsOf($num)
{
    $index = 1;
    $factorsOfArray = [];

    while ($index <= $num) {
        if ($num % $index == 0) {
            $factorsOfArray[] = $index;
        }
        $index = $index + 1;
    }

    return $factorsOfArray;
}
