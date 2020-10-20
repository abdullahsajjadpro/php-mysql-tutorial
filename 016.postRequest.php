<?php

// POST Request:-

/**
 * In computing, POST is a request method supported by HTTP used by the World Wide Web. By design,
 * the POST request method requests that a web server accepts the data enclosed in the body of the 
 * request message, most likely for storing it. It is often used when uploading a file or when submitting
 * a completed web form.
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Request PHP</title>
</head>

<body>
    <div>
        <div>
            <form method="POST">
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
                <br>
                <br>
            </form>
        </div>
        <?php
        if (isset($_POST["submitBasicInfo"])) {
            $name = $_POST["name"]; // getting it from form data stored in body
            $age = $_POST["age"]; // getting it from form data stored in body
            echo "<div><h1>Your Basic Info Is:- Name: {$name} And Age: {$age}</h1></div>";
        }
        ?>
    </div>
</body>

</html>