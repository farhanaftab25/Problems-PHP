<?php

/*
Write a method combinations that takes in an array of unique elements, the method should return a 2D array representing all possible combinations of 2 elements of the array.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/combinations-walkthrough
*/
function combinations($arr)
{
    $pairs = [];
    foreach ($arr as $index1 => $value1) {
        foreach ($arr as $index2 => $value2) {
            if ($index2 > $index1)
                $pairs[] = [$value1, $value2];
        }
    }
    return $pairs;
}

print_r(combinations(["a", "b", "c"])); # => [ [ "a", "b" ], [ "a", "c" ], [ "b", "c" ] ]

print_r(combinations([0, 1, 2, 3])); # => [ [ 0, 1 ], [ 0, 2 ], [ 0, 3 ], [ 1, 2 ], [ 1, 3 ], [ 2, 3 ] ]
