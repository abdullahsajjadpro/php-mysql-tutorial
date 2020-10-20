<?php

// Switch Case:-

$age = 18;

switch ($age) {
    case ($age >= 18):
        echo "You Can Drive";
        break;
    case ($age < 18):
        echo "You Cannot Drive";
        break;
    default:
        echo "It Seems That Something Gone Wrong!";
        break;
}
