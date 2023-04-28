<?php
function concatCapitalize($str)
{
    $strSplit = preg_split("/[_\- ]+/", $str);
    $strFiltered = array_filter($strSplit);
    $capWords = array();
    foreach ($strFiltered as $word) {
        $capWord = ucfirst(strtolower($word));
        $capWords[] = $capWord;
    }
    return implode("", $capWords);
}
echo concatCapitalize("              The quick-brown_fox jumps over the_lazy-dog       ");
echo "\n";
echo concatCapitalize("H- -- ---__ -_- --ello foo_ b___-A r");
