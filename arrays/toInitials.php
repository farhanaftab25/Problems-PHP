<?php

/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/to-initials
Write a method to_initials that takes in a person's name string and returns a string representing their initials.
*/

function toInitials($name)
{
    $initials = '';
    $parts = explode(' ', $name);
    foreach ($parts as $part) {
        $initials = $initials . $part[0];
    }
    return $initials;
}
