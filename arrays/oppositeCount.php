<?php

/*
Write a method opposite_count that takes in an array of unique numbers. The method should return the number of pairs of elements that sum to 0.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/opposite-count
*/
function oppositeCount($arr)
{
    $count = 0;
    foreach ($arr as $index1 => $ele1) {
        foreach ($arr as $index2 => $ele2) {
            if (($index2 > $index1) && ($ele1 + $ele2) == 0) {
                $count += 1;
            }
        }
    }
    return $count;
}
