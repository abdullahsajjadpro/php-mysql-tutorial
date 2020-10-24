<?php

// Sorting:-

// Sort Array In Alphabetical Order
$bioData = array("A", "Fox", "Jumps", "Over", "A", "Wall", "And", "Passes", "Through", "The", "Pulley");
sort($bioData);
foreach($bioData as $newBioData) {
    echo $newBioData . "<br>";
    if ($newBioData === "Wall") {
        echo "<br>------<br><br>";
    }
}

// Reverse The Sorted Data
rsort($bioData);
foreach($bioData as $newBioData) {
    echo $newBioData . "<br>";
}