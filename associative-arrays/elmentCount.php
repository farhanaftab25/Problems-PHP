<?php

/*
Write a method element_count that takes in an array and returns a hash representing the count of each element in the array.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/element-count
*/

function elementCount($arr)
{
    $hash = [];
    foreach ($arr as $elem) {
        if (!array_key_exists($elem, $hash)) {
            $hash[$elem] = 0;
        }
        $hash[$elem] += 1;
    }
    return $hash;
}

print_r(elementCount(["a", "b", "a", "a", "b"])); #=> {"a"=>3, "b"=>2}
print_r(elementCount(["red", "red", "blue", "green"])); #=> {"red"=>2, "blue"=>1, "green"=>1}
