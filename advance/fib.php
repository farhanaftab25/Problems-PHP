<?php

/*
The fibonacci sequence is a sequence of numbers whose first and second elements are 1. To generate further elements of the sequence we take the sum of the previous two elements. For example the first 6 fibonacci numbers are 1, 1, 2, 3, 5, 8. Write a method fibonacci that takes in a number length and returns the fibonacci sequence up to the given length.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/fibonacci
*/
function fibonacci($length)
{
    if ($length == 0) return [];
    if ($length == 1) return [1];
    $seq = [1, 1];
    while (count($seq) < $length) {
        $len = count($seq);
        $seq[] = $seq[$len - 1] + $seq[$len - 2];
    }
    return $seq;
}

print_r(fibonacci(0)); # => []
print_r(fibonacci(1)); # => [1]
print_r(fibonacci(6)); # => [1, 1, 2, 3, 5, 8]
print_r(fibonacci(8)); # => [1, 1, 2, 3, 5, 8, 13, 21]
