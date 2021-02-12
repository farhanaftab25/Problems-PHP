<?php

/*
Write a method ae_count that takes in a string and returns a hash containing the number of a's and e's in the string. Assume the string contains only lowercase characters.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/ae-count
*/



function aeCount($str)
{
    $hash1 = ["a" => 0, "e" => 0];
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == 'a' || $str[$i] == 'e') {
            $char = $str[$i];
            $hash1[$char] += 1;
        }
    }
    return $hash1;
}
print_r(aeCount('bootcamp eeworldaaa'));
