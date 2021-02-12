<?php

$hayStack = "bobisnewbobbobwhocanlovebob";
$needle = "bob";
$len = strlen($needle);

$count = 0;
for ($i = 0; $i < strlen($hayStack); $i++) {
    if (substr($hayStack, $i, $len) === $needle) {
        $count += 1;
    }
}

echo $count;
echo "\n";

$hash = [45 => "hello"];
echo $hash["hello"];
