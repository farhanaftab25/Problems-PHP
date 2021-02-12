<?php
/*
Write a method map_by_name  that takes in an array of hashes and returns a new array containing the names of each hash.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/map-by-name
*/

function mapByName($hash)
{
    return array_map(function ($element) {
        return $element["name"];
    }, $hash);
}

$pets = [
    ["type" => "dog", "name" => "Rolo"],
    ["type" => "cat", "name" => "Sunny"],
    ["type" => "rat", "name" => "Saki"],
    ["type" => "dog", "name" => "Finn"],
    ["type" => "cat", "name" => "Buffy"]
];
// print_r(mapByName($pets));
#print_r(array_map('mapByName', $pets));
// print_r(mapByName($pets)); #=> ["Rolo", "Sunny", "Saki", "Finn", "Buffy"]

$countries = [
    ["name" => "Japan", "continent" => "Asia"],
    ["name" => "Hungary", "continent" => "Europe"],
    ["name" => "Kenya", "continent" => "Africa"],
];
// print_r(array_map('mapByName', $countries)); #=> ["Japan", "Hungary", "Kenya"]
// print_r(mapByName($countries));
