<?php

/*
Write a method range(min, max) that takes in two numbers min and max. The method should return an array containing all numbers from min to max inclusive.
Remember: range is reserved word in php
*/

function range1($min, $max)
{
    $range = [];
    while ($min <= $max) {
        $range[] = $min;
        $min += 1;
    }
    return $range;
}
