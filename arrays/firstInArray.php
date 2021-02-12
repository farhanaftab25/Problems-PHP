<?php

/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/first-in-array
Write a method first_in_array that takes in an array and two elements, the method should return the element that appears earlier in the array.
*/
function firstInArray($arr, $el1, $el2)
{
    if (array_search($el1, $arr) < array_search($el2, $arr)) {
        return $el1;
    } else {
        return $el2;
    }
}
