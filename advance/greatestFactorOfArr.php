<?php

/*
Write a method greatest_factor_array that takes in an array of numbers and returns a new array where every even number is replaced with it's greatest factor. A greatest factor is the largest number that divides another with no remainder. For example the greatest factor of 16 is 8. (For the purpose of this problem we won't say the greatest factor of 16 is 16, because that would be too easy, ha)

https://open.appacademy.io/learn/full-stack-online/intro-to-programming/greatest-factor-array

*/
function greatestFactorArray($arr)
{
    return array_map(function ($num) {
        if ($num % 2 == 0) return greatestFactor($num);
        else return $num;
    }, $arr);
}
function greatestFactor($num)
{
    for ($factor = $num - 1; $factor > 0; $factor--) {
        if ($num % $factor == 0) {
            return $factor;
        }
    }
}
