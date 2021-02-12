<?php

/*
Write a method array_translate that takes in an array whose elements alternate between words and numbers. The method should return a string where each word is repeated the number of times that immediately follows in the array.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/array-translate
*/
function arrayTranslate($arr)
{
    $newStr = "";

    foreach ($arr as $index => $elem) {
        if (is_numeric($elem) === true) {
            $name = $arr[$index - 1];
            $newStr .= str_repeat($name, $elem);
        }
    }
    return $newStr;
}
echo arrayTranslate(["Cat", 2, "Dog", 3, "Mouse", 1]);
