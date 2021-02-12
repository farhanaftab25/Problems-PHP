<?php

/*
Write a method rotate_array that takes in an array and a number. The method should return the array after rotating the elements the specified number of times. A single rotation takes the last element of the array and moves it to the front.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/rotate-array
*/


function rotateArray($arr, $num)
{
    for ($i = 0; $i < $num; $i++) {
        array_unshift($arr, array_pop($arr));
    }
    return $arr;
}
var_dump(rotateArray(["Matt", "Danny", "Mashu", "Matthias"], 1));
# => [ "Matthias", "Matt", "Danny", "Mashu" ]


var_dump(rotateArray(["a", "b", "c", "d"], 2));
# => [ "c", "d", "a", "b" ]

$new = ["a", "b", "c", "d"];
$elment = array_pop($new);
var_dump($new);

array_unshift($new, $elment);
var_dump($new);
