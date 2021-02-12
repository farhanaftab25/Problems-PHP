<?php

/*
Write a method pick_primes that takes in an array of numbers and returns a new array containing only the prime numbers.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/pick-primes
*/

function pickPrimes($numbers)
{
    return array_filter($numbers, 'isPrime');
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
