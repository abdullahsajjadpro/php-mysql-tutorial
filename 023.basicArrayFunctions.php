<?php

// Basic Array Functions:-

$friends = array("Abu Bakar", "Moazzam", "Abu Zar", "Abdullah Nadeem");

// Remove An Element From The End Of Element
array_pop($friends);

// It Will Add An Element To The End Of An Array
array_push($friends, "Abu Bakar Atif");

// Remove An Element From The Beginning Of 
array_shift($friends);

// It Will Add An Element To The Beginning Of An Array
array_unshift($friends, "Saroosh");

// Combine Two Arrays
$name1 = array("Abdullah", "Sajjad");
$name2 = array("Hadia", "Sajjad");

function combine($arr1, $arr2) {
    $combining = array_merge($arr1, $arr2);
    $makeArraysUnique = array_unique($combining);
    $finalArray = $makeArraysUnique;
    return $finalArray;
}

print_r(combine($name1, $name2));