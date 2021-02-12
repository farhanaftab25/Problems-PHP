<?php

/*
Write a method same_char_collapse that takes in a string and returns a collapsed version of the string. To collapse the string, we repeatedly delete 2 adjacent characters that are the same until there are no such adjacent characters. If there are multiple pairs that can be collapsed, delete the leftmost pair. For example, we take the following steps to collapse "zzzxaaxy": zzzxaaxy -> zxaaxy -> zxxy -> zy

https://open.appacademy.io/learn/full-stack-online/intro-to-programming/same-char-collapse
*/

function sameCharCollapse($str)
{

    // $index = 1;

    // $isCollapsed = false;
    // while (true) {

    //     $currChar = $str[$index];
    //     $prevChar = $str[$index - 1];

    //     if ($currChar == $prevChar) {

    //         if (strlen($str) == 2) { return ''; }
    //         $str = substr($str, 0, $index - 1) . substr($str, $index + 1);
    //         $index = 0;
    //         $isCollapsed = true;

    //     }

    //     if (strlen($str) == $index + 1) break;

    //     $index += 1;


    // }
    // return $str;
    $collapisble = true;
    while ($collapisble) {
        $collapisble = false;
        $chars = str_split($str);
        for ($i = 1; $i < strlen($str); $i++) {
            if ($chars[$i - 1] == $chars[$i]) {
                $chars[$i] = "";
                $chars[$i - 1] = "";
                $collapisble = true;
                break;
            }
        }
        $str = implode("", $chars);
    }
    return $str;
}


#var_dump(sameCharCollapse("abcedf"));   #=> "zy"
# because zzzxaaxy -> zxaaxy -> zxxy -> zy

// var_dump(sameCharCollapse("vqrssrqvtt")); #=> "uv"
# because uqrssrqvtt -> uqrrqvtt -> uqqvtt -> uvtt -> uv
// echo substr("uqrssrqvtt", 0, 3) . "\n";
// echo substr("uqrssrqvtt", 4 + 1) . "\n";
echo 201895 % 10 . "\n";
echo 2 % 1;
