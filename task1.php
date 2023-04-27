<?php
function isGreaterIf($number) {
    if($number > 30) {
        echo "More than 30\n";
    }
    elseif($number > 20) {
        echo "More than 20\n";
    }
    elseif($number > 10) {
        echo "More than 10\n";
    }
    else {
        echo "Equal or less than 10\n";
    }
}

function isGreaterSwitch($number) {
    switch(true) {
        case ($number > 30):
            echo "More than 30\n";
            break;
        case ($number > 20):
            echo "More than 20\n";
            break;
        case ($number > 10):
            echo "More than 10\n";
            break;
        default:
            echo "Equal or less than 10\n";
            break;
    }
}

function isGreaterTernary($number) {
    echo $number>30 ? "More than 30" : ($number>20 ? "More than 20" : ($number>10 ? "More than 10" : "Equal or less than 10"));
}

function testValues($number) {
    switch($number) {
        case 1:
            isGreaterIf(0);
            isGreaterSwitch(15);
            isGreaterTernary(25);
            break;
        case 2:
            isGreaterIf(25);
            isGreaterSwitch(0);
            isGreaterTernary(15);
            break;
        case 3:
            isGreaterIf(-10);
            isGreaterSwitch(25);
            isGreaterTernary(0);
            break;
        case 4:
            isGreaterIf('a');
            isGreaterSwitch(35);
            isGreaterTernary(135);
            break;
        case 5:
            isGreaterIf(36);
            isGreaterSwitch('a');
            isGreaterTernary('b');
            break;
    }
}

$a = readline("Enter a number from 1 to 5: ");
testValues($a);
?>