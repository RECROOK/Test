<?php
// sore each exercise in a string variable
$exercise1 = 'Display "hello World 1"';
$exercise2 = 'Display "hello World 2"';
$exercise3 = 'Display "hello World 3"';
$exercise4 = 'Display "hello World 4"';
$exercise5 = 'Display "hello World 5"';
$exercise6 = 'Display "hello World 6"';
$exercise7 = 'Display "hello World 7"';
// create a variable containing the day of the week
$day = date('N');
//var_dump ($day);
//use an if statement to test for the day of the week
if ($day == 1) {
    echo $exercise1;
}
elseif ($day == 2) {
    echo $exercise2;
}
elseif ($day == 3) {
    echo $exercise3;
}
elseif ($day == 4) {
    echo $exercise4;
}
elseif ($day == 5) {
    echo $exercise5;
}
elseif ($day == 6) {
    echo $exercise6;
}
elseif ($day == 7) {
    echo $exercise7;
}

// display the corresponding exercise string

