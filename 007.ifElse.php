<?php

// If-Else is a conditional statement for executing the particular code by appying logic.

$abdullahAge = 15;
$abuBakarAge = 15;

if ($abdullahAge > $abuBakarAge) {
    echo "Abdullah is older than Abu Bakar";
} else if ($abuBakarAge > $abdullahAge) {
    echo "Abu Bakar is older than Abdullah";
} else if ($abdullahAge === $abuBakarAge) {
    echo "Both Ages are Equal";
} else {
    echo "It Seems That Something Gone Wrong!";
}
