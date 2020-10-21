<?php

// Loops:-

// For-Loop:-
for ($i = 0; $i <= 10; $i++) {
    echo "Number: {$i} <br>";
    if ($i === 10) {
        echo "<br>----------For-Loop Finished!---------<br><br>";
    }
}

// While-Loop:-
$iTwo = 0;
while ($iTwo <= 10) {
    echo "Number: {$iTwo} <br>";
    if ($iTwo === 10) {
        echo "<br>----------While-Loop Finished!---------<br><br>";
    }
    $iTwo++;
}

// Do-While-Loop:-
$iThree = 0;
do {
    echo "Number: {$iThree} <br>";
    $iThree++;
} while ($iThree <= 10);
echo "<br>----------Do-While-Loop Finished!---------<br><br>";
