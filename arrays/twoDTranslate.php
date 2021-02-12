<?php


// Write a method two_d_translate that takes in a 2 dimensional array and translates it into a 1 dimensional array. You can assume that the inner arrays always have 2 elements. See the examples.
# https://open.appacademy.io/learn/full-stack-online/intro-to-programming/two-dimensional-translate


function twoDTranslate($arr)
{
    $newArr = [];
    foreach ($arr as $ele) {
        $count = $ele[1];
        $name = $ele[0];
        for ($i = 0; $i < $count; $i++) {
            $newArr[] = $name;
        }
    }
    return $newArr;
}
