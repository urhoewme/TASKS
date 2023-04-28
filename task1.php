<?php
function classifyNumberRangeIf($number)
{
    if($number > 30) {
        return "More than 30\n";
    } elseif($number > 20) {
        return "More than 20\n";
    } elseif($number > 10) {
        return "More than 10\n";
    } else {
        return "Equal or less than 10\n";
    }
}
function classifyNumberRangeSwitch($number)
{
    switch(true) {
        case ($number > 30):
            return "More than 30\n";
        case ($number > 20):
            return "More than 20\n";
        case ($number > 10):
            return "More than 10\n";
        default:
            return "Equal or less than 10\n";
    }
}
function classifyNumberRangeTernary($number)
{
    return $number>30 ? "More than 30" : ($number>20 ? "More than 20" : ($number>10 ? "More than 10" : "Equal or less than 10"));
}
echo classifyNumberRangeIf(0);
echo classifyNumberRangeSwitch(15);
echo classifyNumberRangeTernary(25);
echo "\n";
echo classifyNumberRangeIf(25);
echo classifyNumberRangeSwitch(0);
echo classifyNumberRangeTernary(15);
echo "\n";
echo classifyNumberRangeIf(-10);
echo classifyNumberRangeSwitch(25);
echo classifyNumberRangeTernary(0);
echo "\n";
echo classifyNumberRangeSwitch(35);
echo classifyNumberRangeTernary(135);
echo "\n";
echo classifyNumberRangeIf(36);
