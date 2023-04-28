<?php
function printNumbers($a, $b)
{
    if ($a == $b) {
        return $a . " ";
    } elseif ($a < $b) {
        echo $a . " ";
        printNumbers($a + 1, $b);
    } else {
        echo $a . " ";
        printNumbers($a - 1, $b);
    }
}
$a1 = 1;
$b1 = 7;
printNumbers($a1, $b1);
echo "\n";
$a2 = -3;
$b2 = 2;
printNumbers($a2, $b2);
