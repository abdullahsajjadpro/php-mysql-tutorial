<?php

// For-Each Loop (Used To Loop Through The Array):-
$bioData = array(
    array("Abdullah", 15, 2727),
    array("Abu Bakar", 14, 2192),
    array("Moazzam", 14, 2715)
);

foreach ($bioData as $BioData) {
    foreach ($BioData as $ActualBioData) {
        echo $ActualBioData . "<br>";
    }
}
