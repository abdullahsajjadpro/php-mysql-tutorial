<?php

// GET Request:-

/**
 * 1. The GET method is used to retrieve information from the given server using a given URI.
 * 2. Requests using GET should only retrieve data and should have no other effect on the data.
 * 3. Same as GET, but it transfers the status line and the header section only.
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Request PHP</title>
</head>

<body>
    <div>
        <div>
            <form method="GET">
                <h1>Basic Info</h1>
                <label>Enter Name: </label>
                <br>
                <input type="text" name="name" placeholder="Enter Name" autocomplete="off" />
                <br>
                <br>
                <label>Enter Age: </label>
                <br>
                <input type="number" name="age" placeholder="Enter Age" autocomplete="off" />
                <br>
                <br>
                <button type="submit" name="submitBasicInfo" value="true">Submit Your Basic Info</button>
                <!-- After pressing the submit button the data filled in the the url like this 
                http://localhost/php-tutorial/015.getRequest.php?name=Abdullah&age=15&submitBasicInfo=true -->
                <br>
                <br>
            </form>
        </div>
        <?php
        if (isset($_GET["submitBasicInfo"])) {
            // isset() function means if setted.
            $name = $_GET["name"]; // Getting name from url query strings which is like http://localhost/php-tutorial/015.getRequest.php?name=Abdullah&age=15&submitBasicInfo=true
            $age = $_GET["age"]; // Getting age from url query strings which is like http://localhost/php-tutorial/015.getRequest.php?name=Abdullah&age=15&submitBasicInfo=true
            echo "<div><h1>Your Basic Info Is:- Name: {$name} And Age: {$age}</h1></div>";
        }
        ?>
    </div>
</body>

</html>