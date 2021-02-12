<?php

/*
Write a method map_by_key that takes in an array of hashes and a key string. The method should returns a new array containing the values from each hash for the given key.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/map-by-key
*/

function mapByKey($hash, $key)
{
    return array_map(function ($element) use ($key) {
        return ($element[$key]);
    }, $hash);
}



$locations = [
    ["city" => "New York City", "state" => "New York", "coast" => "East"],
    ["city" => "San Francisco", "state" => "California", "coast" => "West"],
    ["city" => "Portland", "state" => "Oregon", "coast" => "West"],
];

#print_r(mapByKey($locations, "state")); #=> ["New York", "California", "Oregon"]
#print_r(mapByKey($locations, "city"));  #=> ["New York City", "San Francisco", "Portland"]
