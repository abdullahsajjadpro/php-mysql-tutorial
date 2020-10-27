<?php

// Delete Data From DB:-
if (isset($_GET["id"])) {
    require "./024.connectDatabase.php";
    $id = $_GET["id"];
    $email = $_GET["email"];
    $deleteQuerySQL = "DELETE FROM data WHERE id={$id}";
    $deleteFromDB = mysqli_query($dbConnection, $deleteQuerySQL);
    if ($deleteFromDB == true) {
        header("Location: ./026.displayDataFromDB.php");
    }
} else {
    echo "No User Selected";
}
