<?php

/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/sum-elements-whiteboard
Write a method sum_elements(arr1, arr2) that takes in two arrays. The method should return a new array containing the results of adding together corresponding elements of the original arrays. You can assume the arrays have the same length.
*/

function sumElemnts($arr1, $arr2)
{
    $newArray = [];
    for ($i = 0; $i < count($arr1); $i++) {
        $newArray[] = $arr1[$i] + $arr2[$i];
    }
    return $newArray;
}
