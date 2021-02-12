<?php

/*
Write a method prime? that takes in a number and returns a boolean, indicating whether the number is prime. A prime number is only divisible by 1 and itself.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/prime
*/

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
// var_dump(isPrime(2));  #=> true
// var_dump(isPrime(5));  #=> true
// var_dump(isPrime(11)); #=> true
// var_dump(isPrime(4));  #=> false
// var_dump(isPrime(9));  #=> false
// var_dump(isPrime(-5)); #=> false
