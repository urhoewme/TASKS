<?php

function concatCapitalize($str) {
    $str_split = preg_split("/[_\- ]+/", $str);
    $str_filtered = array_filter($str_split);
    $capWords = array();
    foreach ($str_filtered as $word) {
        $capWord = ucfirst(strtolower($word));
        $capWords[] = $capWord;
    }
    return implode("", $capWords);
}

function testTask($number) {
    switch($number) {
        case 1:
            echo concatCapitalize("              The quick-brown_fox jumps over the_lazy-dog       ");
            break;
        case 2:
            echo concatCapitalize("H- -- ---__ -_- --ello foo_ b___-A r");
            break;
    }
}

$a = readline("Enter a number from 1-2: ");
testTask($a);

?>