<?php

function printNumbers($a, $B)
{
    if ($a == $B) {
        echo $a . " ";
    } elseif ($a < $B) {
        echo $a . " ";
        printNumbers($a + 1, $B);
    } else {
        echo $a . " ";
        printNumbers($a - 1, $B);
    }
}

function testTask($number)
{
    switch ($number) {
        case 1:
            $a = 1;
            $b = 7;
            printNumbers($a, $b);
            break;
        case 2:
            $a = -3;
            $b = 2;
            printNumbers($a, $b);
            break;
    }
}

$c = readline("Enter a number from 1-2: ");
testTask($c);
