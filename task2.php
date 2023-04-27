<?php
function birthdayCountdown($date) {
    $timestamp = strtotime($date);

    $today = time();
    $days_left = ceil(($timestamp - $today) / 86400);
    $days_gone = -1*$days_left;

    if ($days_left > 0) {
        echo "There are $days_left days left until your birthday.";
    } elseif ($days_left == 0) {
        echo "Happy birthday!";
    } else {
        echo "Your birthday was $days_gone days ago.";
    }
}

function testTask($number) {
    switch($number) {
        case 1:
            echo birthdayCountdown("24-06-2023");
            break;
        case 2:
            echo birthdayCountdown(date("d-m-Y",time()));
            break;
        case 3:
            echo birthdayCountdown("24-01-2023");
            break;
    }
}

$a = readline("Enter a number from 1-3: ");
testTask($a);
?>