<?php

// Functions:-

// Simple Function that does not returns anything and does not contains any Parameter.
function sum1() {
    echo 10+10 . "<br>";
}

sum1();

// Function that does not returns anything and have Required Parameters.
function sum2($num1, $num2) {
    echo $num1 + $num2 . "<br>";
}

sum2(40, 40);

// Function that does not returns anything and have Optional Or Default Parameters.
function sum3($num1 = 0, $num2 = 0) {
    echo $num1 + $num2 . "<br>";
}

sum3();

// Function that returns the sum of two numbers and have Required Parameters.
function sum4($num1, $num2) {
    return $num1 + $num2 . "<br>";
}

echo sum4(100, 200);