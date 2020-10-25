<?php

// Connecting To Database:-

// Checking Connection
function checkDBConnection()
{
    $user = "root";
    $password = "";
    $host = "localhost";
    $database = "crud";

    // Making Connection
    $connectToDatabase = mysqli_connect($host, $user, $password, $database);

    // Checking Connection
    if ($connectToDatabase == true) {
        echo "<script>alert(`Connection Made To Database`);</script>";
        return $connectToDatabase;
    } else if ($connectToDatabase == false) {
        echo "<script>alert(`Connection Not Made To Database`);</script>";
        return null;
    }
}

$dbConnection = checkDBConnection();
