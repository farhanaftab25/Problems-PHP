<?php
/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/is-valid-name
Write a method is_valid_name that takes in a string and returns a boolean indicating whether or not it is a valid name.
*/
# A name is valid is if satisfies all of the following:
# - contains at least a first name and last name, separated by spaces
# - each part of the name should be capitalized
#
# Hint: use str.upcase or str.downcase
# "a".upcase # => "A"

function isValidName($str)
{
    $parts = explode(' ', $str);

    if (count($parts) < 2) {
        return false;
    }

    if ($str !== formatName($str))
        return false;

    return true;
}

function formatName($str)
{
    return ucwords(strtolower($str));
}

var_dump(isValidName("Kush Patel"));     # => true
var_dump(isValidName("Daniel"));           # => false
var_dump(isValidName("Robert Downey Jr")); # => true
var_dump(isValidName("ROBERT DOWNEY JR")); # => false
