<?php

/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/select-odds
Write a method select_odds(numbers) that takes in an array of numbers and returns a new array containing the odd numbers of the original array.
*/

function selectOdd($numbers)
{
    $odds = [];

    foreach ($numbers as $number) {
        if ($number % 2 == 1) {
            $odds[] = $number;
        }
    }

    return $odds;
}
