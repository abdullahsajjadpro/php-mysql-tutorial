<?php

// Implode And Explode Functions:-

// Implode Function (Joins The Array Element With A String)
$friends = array("Abdullah", "Nouman", "Abu Bakar", "Shahzaib", "Moazzam");
$friendsList = implode(" - | - ", $friends);
// First Para is which to add after one Element and Second Para is the Array.
echo $friendsList . "<br>";

// Explode Function (Convert String To Array)
$bioData = "My name is Abdullah Sajjad";
$convertBioDataToArray = explode(" ", $bioData);
// First Para is where to break from a String and Second Para is the Array.
foreach($convertBioDataToArray as $newBioData) {
    echo $newBioData . "<br>";
}