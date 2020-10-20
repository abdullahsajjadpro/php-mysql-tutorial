<?php

/**
 * Concatination In PHP:-
 *  Concatinating means we are joining Strings with Anything or Numbers with Anything.
 */

$nameOne = "Abdullah Sajjad";
$ageOne = 15;
$nameTwo = "Abdu Bakar";
$ageTwo = 14;
$sumOfAges = $ageTwo + $ageTwo;

// Concatinating by using (.) Operator.
$result = "Names Are {$nameOne} and {$nameTwo} with Ages " . $ageOne . " and " . $ageTwo . " and the Sum of Both Ages is " . $sumOfAges;
echo $result; // Output Is:- Names Are Abdullah Sajjad and Abdu Bakar with Ages 15 and 14 and the Sum of Both Ages is 28
