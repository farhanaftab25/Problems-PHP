<?php

/*
Write a method cat_builder that takes in a name, color, and age. The method should return a hash representing a cat with those values.
https://open.appacademy.io/learn/full-stack-online/intro-to-programming/cat-builder
*/


function catBuilder($name_str, $color_str, $age_num)
{
    return ["name" => $name_str, "color" => $color_str, "age" => $age_num];
}

#print_r(catBuilder("Whiskers", "orange", 3)); #=> {"name"=>"Whiskers", "color"=>"orange", "age"=>3}

#print_r(catBuilder("Salem", "black", 100)); #=> {"name"=>"Salem", "color"=>"black", "age"=>100}
