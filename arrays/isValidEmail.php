<?php

/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/is-valid-email
Write a method is_valid_email that takes in a string and returns a boolean indicating whether or not it is a valid email address.

# For simplicity, we'll consider an email valid when it satisfies all of the following:
# - contains exactly one @ symbol
# - contains only lowercase alphabetic letters before the @
# - contains exactly one . after the @
*/

function isValidEmail($str)
{
    if (strpos($str, '@') === false || substr_count($str, '@') >= 2) {
        return false;
    }

    $parts = explode('@', $str);

    if (strpos($parts[1], '.') === false) {
        return false;
    }

    return ctype_alpha($parts[0]);
}

var_dump(isValidEmail("abc@xy.z"));         # => true
var_dump(isValidEmail("jdoe@gmail.com"));   # => true
var_dump(isValidEmail("jdoe@g@mail.com"));  # => false
var_dump(isValidEmail("jdoe42@gmail.com")); # => false
var_dump(isValidEmail("jdoegmail.com"));    # => false
var_dump(isValidEmail("az@email"));         # => false
