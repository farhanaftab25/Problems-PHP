<?php

/*
Write a method two_d_Sum that takes in a two dimensional array and returns the sum of all elements in the array.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/two-dimensional-sum
*/
function twoDSum($arr)
{
    $sum = 0;
    foreach ($arr as $ele) {
        $sum = $sum + array_sum($ele);
    }
    return $sum;
}
