<?php

/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/element-replace
Write a method element_replace that takes in an array and a hash. The method should return a new array where elements of the original array are replaced with their corresponding values in the hash.
*/

function elementReplace($arr, $hash)
{
    $newArr = [];
    foreach ($arr as $key) {
        if (isset($hash[$key])) {
            $newArr[] = $hash[$key];
        } else {
            $newArr[] = $key;
        }
    }
    return $newArr;
}
$arr1 = ["LeBron James", "Lionel Messi", "Serena Williams"];
$hash1 = ["Serena Williams" => "tennis", "LeBron James" => "basketball"];
print_r(elementReplace($arr1, $hash1)); # => ["basketball", "Lionel Messi", "tennis"]

$arr2 = ["dog", "cat", "mouse"];
$hash2 = ["dog" => "bork", "cat" => "meow", "duck" => "quack"];
print_r(elementReplace($arr2, $hash2)); # => ["bork", "meow", "mouse"]
