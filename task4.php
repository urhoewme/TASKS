<?php
function removeElement($array, $position) {
    if ($position < 0 || $position >= count($array)) {
        return $array;
    }

    unset($array[$position]);

    $i = 0;
    foreach ($array as $key => $value) {
        if ($key !== $i) {
            $array[$i] = $value;
            unset($array[$key]);
        }
        $i++;
    }
    return $array;
}

function testTask($number) {
    switch($number) {
        case 1:
            $array = [1,2,3,4,5];
            $position = 1;
            $result = removeElement($array,$position);
            print_r($result);
            break;
        case 2:
            $array = [1,2,3,4,5];
            $position = 20;
            $result = removeElement($array,$position);
            print_r($result);
            break;
    }
}

$a = readline("Enter a number from 1-2: ");
testTask($a);

?>