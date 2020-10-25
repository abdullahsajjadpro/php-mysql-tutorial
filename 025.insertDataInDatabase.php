<?php

// Inserting Data Into Database:-

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>

<body>
    <div>
        <div>
            <h1>Insert Data In Database</h1>
        </div>
        <div>
            <form method="POST">
                <input name="name" type="text" placeholder="Enter Your Name:" require />
                <input name="email" type="email" placeholder="Enter Your Email:" require />
                <input name="phone" type="number" placeholder="Enter Your Phone No:" require />
                <button name="insertData" type="submit" require>Submit Data</button>
            </form>
            <?php
            function insertDataInDatabase()
            {
                // Requiring Database Connection File
                require "./024.connectDatabase.php";
                if (isset($_POST["insertData"])) {
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $phone = $_POST["phone"];
                    if (strlen($name) >= 6 && strlen($phone) >= 11) {
                        if ($dbConnection != null) {
                            $insertQuerySQL = "INSERT INTO data(name, email, phone) VALUES('{$name}', '{$email}', '{$phone}')";
                            $insertInDB = mysqli_query($dbConnection, $insertQuerySQL);
                        }
                    } else {
                        echo "<script>alert(`Check The Length Of Your Name Or Phone`);</script>";
                    }
                }
            }
            insertDataInDatabase();
            ?>
        </div>
    </div>
</body>

</html>