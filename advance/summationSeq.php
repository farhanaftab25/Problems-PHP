<?php

/*
A number's summation is the sum of all positive numbers less than or equal to the number. For example: the summation of 3 is 6 because 1 + 2 + 3 = 6, the summation of 6 is 21 because 1 + 2 + 3 + 4 + 5 + 6 = 21. Write a method summation_sequence that takes in a two numbers: start and length. The method should return an array containing length total elements. The first number of the sequence should be the start number. At any point, to generate the next element of the sequence we take the summation of the previous element. You can assume that length is not zero.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/summation-sequence
*/
function summationSequence($start, $length)
{
    $seq = [$start];
    while (count($seq) < $length) {
        $seq[] = summation($seq[count($seq) - 1]);
    }
    return $seq;
}
function summation($num)
{
    $sum = 0;
    for ($i = 1; $i <= $num; $i++) {
        $sum = $sum + $i;
    }
    return $sum;
}
