<?php
function addDigits($num) {
    if (preg_match('/^0+$/', $num)) {
        return 0;
    }

    while ($num > 9) {
        $digits = str_split(abs($num));

        $sum = array_sum($digits);

        $num = $sum;
    }
    return $num;
}

function testTask($number) {
    switch($number) {
        case 1:
            echo addDigits(000000000);
            break;
        case 2:
            echo addDigits(129936683);
            break;
        default:
            echo "An error occurred";
            break;
    }
}

$a = readline("Enter a number from 1-2: ");
testTask($a);
?>
