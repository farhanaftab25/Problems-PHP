<?php

/*
Write a method pyramid_sum that takes in an array of numbers representing the base of a pyramid. The function should return a 2D array representing a complete pyramid with the given base. To construct a level of the pyramid, we take the sum of adjacent elements of the level below.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/pyramid-sum
*/
function pyramidSum($base)
{
    $len = count($base);

    $pyramid = [$base];

    while (count($pyramid) < $len) {
        $prevLevel = $pyramid[0];
        $nextLevel = adjacentSum($prevLevel);
        array_unshift($pyramid, $nextLevel);
    }
    return $pyramid;
}

function adjacentSum($arr)
{
    $newArr = [];
    for ($index = 1; $index < count($arr); $index++) {
        $newArr[] = $arr[$index] + $arr[$index - 1];
    }
    return $newArr;
}
