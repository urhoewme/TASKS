<?php

function printNumbers($a, $b)
{
    if ($a == $b) {
        echo $a . " ";
    } elseif ($a < $b) {
        echo $a . " ";
        printNumbers($a + 1, $b);
    } else {
        echo $a . " ";
        printNumbers($a - 1, $b);
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
