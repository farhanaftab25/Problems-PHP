<?php

/*
Write a method hand_score that takes in a string representing a hand of cards and returns it's total score. You can assume the letters in the string are only A, K, Q, J. A is worth 4 points, K is 3 points, Q is 2 points, and J is 1 point. The letters of the input string not necessarily uppercase.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/hand-score
*/

function handScore($hand)
{
    $hand = strtoupper($hand);
    $totalPoints = 0;
    $deck = [
        "A" => 4,
        "K" => 3,
        "Q" => 2,
        "J" => 1,
    ];
    for ($index = 0; $index < strlen($hand); $index++) {
        $card = $hand[$index];
        if (array_key_exists($card, $deck)) {
            $totalPoints += $deck[$card];
        }
    }
    return $totalPoints;
}
echo handScore("AQAJ") . "\n"; #=> 11
echo handScore("jJka") . "\n"; #=> 9
