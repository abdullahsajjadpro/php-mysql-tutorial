<?php

// Some Important Functions:-

// Generate Random Numbers:-
$randomNumber = rand(0, 25); // First param is min number from which it starts and the second is the max number
echo $randomNumber;

// See Number Of Letters In String:-
$line = "My name is Abdullah Sajjad";
$lengthOfLine = strlen($line);
echo $lengthOfLine;

// See Number Of Words In String:-
$lineTwo = "My name is Abdullah Sajjad Haider";
$wordsInALine = str_word_count($lineTwo);
echo $wordsInALine;

// Replace Char and Words
$name = "Abdullah Sajjad H.";
$replaceName = str_replace("H.", "Haider", $name);
echo $replaceName;