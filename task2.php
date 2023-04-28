<?php
function birthdayCountdown($date)
{
    $timestamp = strtotime($date);
    $today = time();
    $daysLeft = ceil(($timestamp - $today) / 86400);
    $daysGone = -1 * $daysLeft;
    if ($daysLeft > 0) {
        echo "There are $daysLeft days left until your birthday.";
    } elseif ($daysLeft == 0) {
        echo "Happy birthday!";
    } else {
        echo "Your birthday was $daysGone days ago.";
    }
}
echo birthdayCountdown("24-06-2023");
echo "\n";
echo birthdayCountdown(date("d-m-Y", time()));
echo "\n";
echo birthdayCountdown("24-01-2023");
