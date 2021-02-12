<?php

/*
Write a method perfect_square? that takes in a number and returns a boolean indicating whether it is a perfect square. A perfect square is a number that results from multiplying a number by itself. For example, 9 is a perfect square because 3  3 = 9, 25 is a perfect square because 5  5 = 25.

https://open.appacademy.io/learn/full-stack-online/intro-to-programming/perfect-square
*/

function perfectSquare($number)
{ // equal is liye hai because 1 * 1 = 1;
    for ($factor = 1; $factor <= $number; $factor++) {
        if (($factor * $factor) == $number) {
            return true;
        }
    }
    return false;
}
// var_dump(perfectSquare(5));   #=> false
// var_dump(perfectSquare(12)); #=> false
// var_dump(perfectSquare(30));  #=> false
// var_dump(perfectSquare(9));   #=> true
// var_dump(perfectSquare(25));  #=> true
