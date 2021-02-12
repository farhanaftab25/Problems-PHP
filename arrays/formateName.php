<?php

/*
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/format-name
Write a method format_name that takes in a name string and returns the name properly capitalized.
*/

function formatName($str)
{
    return ucwords(strtolower($str));
}
