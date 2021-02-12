<?php

/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/retrieve-values
Write a method retrieve_values that takes in two hashes and a key. The method should return an array containing the values from the two hashes that correspond with the given key
*/



function retrieveValues($hash1, $hash2, $key)
{
    return [$hash1[$key], $hash2[$key]];
}

// $dog1 = ["name"=>"Fido", "color"=>"brown"];
// $dog2 = ["name"=>"Spot", "color"=> "white"];
// print_r(retrieveValues($dog1, $dog2, "name")); #=> ["Fido", "Spot"]
// print_r(retrieveValues($dog1, $dog2, "color")); #=> ["brown", "white"]
