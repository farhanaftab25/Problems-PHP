<?php

/*
Write a method get_full_name that takes in a hash containing a first, last, and title. The method should return a string representing the hash's full name
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/get-full-name
*/
function getFullName($h)
{
    return $h["first"] . ' ' . $h["last"] . ', the ' . $h["title"];
}
