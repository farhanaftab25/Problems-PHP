<?php

/*
Write a method prime_factors that takes in a number and returns an array containing all of the prime factors of the given number
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/prime-factors
*/

function primeFactors($num)
{
    $primeFactors = [];

    for ($factor = 1; $factor < $num; $factor++) {
        if ($num % $factor == 0) {
            if (isPrime($factor)) {
                $primeFactors[] = $factor;
            }
        }
    }
    return $primeFactors;
}

function isPrime($num)
{
    if ($num < 2) return false;

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
// print_r(primeFactors(24)); #=> [2, 3]
// print_r(primeFactors(60)); #=> [2, 3, 5]
