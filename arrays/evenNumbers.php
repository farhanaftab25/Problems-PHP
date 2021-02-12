<?php

/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/even-nums
Write a method even_nums(max) that takes in a number max and returns an array containing all even numbers from 0 to max
*/

function evenNumbers($max)
{
    $evenNumbers = [];
    for ($num = 0; $num <= $max; $num++) {
        if ($num % 2 == 0) {
            $evenNumbers[] = $num;
        }
    }
    return $evenNumbers;
}
