<?php
function addDigits($num)
{
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
echo addDigits(000000000);
echo "\n";
echo addDigits(129936683);
