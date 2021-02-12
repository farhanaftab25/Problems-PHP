<?php

/*
Write a method select_upcase_keys that takes in a hash and returns a new hash containing key-value pairs of the original hash that had uppercase keys. You can assume that the keys will always be strings.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/select-upcase-keys
*/
function selectUpcaseKeys($hash1)
{
    $newHash = [];
    foreach ($hash1 as $key => $value) {
        if (ctype_upper($key)) {
            $newHash[$key] = $value;
        }
    }
    return $newHash;
}
