<?php

// Data Types:-

// Boolean:-
$isRich = true; // Returns 1.
$isPoor = false; // Returns 0.

// Integer:-
$noOfCountry = 195;

// Float:-
$percentageOfOxygenInAir = 20.95;

// String:-
$name = "My name is Abdullah Sajjad";

// Array:-
$names = array("Abdullah", "Abu Bakar", "Moazzam", "Ayaan"); // An array is a group of values.
// Abdullah is at 0 index, Abu Bakar is at 1, Moazzam is at 2, and Ayaan is at 3.
// Calling Array Values:-
echo $names[0]; // Output is:- Abdullah
echo $names[1]; // Output is:- Abu Bakar
echo $names[2]; // Output is:- Moazzam
echo $names[3]; // Output is:- Ayaan

// Types Of Arrays:-

// Associative Array:-
$nameAndAge = array("Abdullah" => 15, "Abu Bakar" => 14); // An associative array is a group of key and value pairs.
// Calling Array Values:-
echo $nameAndAge["Abdullah"]; // Abdullah is key and Output is:- 15
echo $nameAndAge["Abu Bakar"]; // Abu Bakar is key and Output is:- 14

// Multidimensional Array:-
// A multidimensional array is an array containing one or more arrays.
// PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.
$cars = array(
    array("Volvo" => "Abdullah", 22, 18),
    array("BMW" => "Moazzam", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);
// Calling Array Values:-
echo $cars[0]["Volvo"]; // Output is:- Abdullah
echo $cars[1]["BMW"]; // Output is:- Moazzam
echo $cars[2][0]; // Output is:- Saab
echo $cars[3][1]; // Output is:- 17
