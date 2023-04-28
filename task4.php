<?php
function removeElement($array, $position)
{
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


$array1 = [1,2,3,4,5];
$position1 = 1;
$result = removeElement($array1, $position1);
print_r($result);
$array2 = [1,2,3,4,5];
$position2 = 20;
$result = removeElement($array2, $position2);
print_r($result);
