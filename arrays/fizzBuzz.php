<?php

/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/fizz-buzz
Write a method fizz_buzz(max) that takes in a number max and returns an array containing all numbers greater than 0 and less than max that are divisible by either 4 or 6, but not both.
*/
function fizzBuzz($max)
{
    $newArray = [];
    for ($i = 1; $i < $max; $i++) {
        if (($i % 4 == 0 || $i % 6 == 0) && !($i % 4 == 0 && $i % 6 == 0)) {
            $newArray[] = $i;
        }
    }
    return $newArray;
}

print_r(fizzBuzz(20)); # => [4, 6, 8, 16, 18]

print_r(fizzBuzz(15)); # => [4, 6, 8]
