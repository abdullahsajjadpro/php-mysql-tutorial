<?php

// Updating Data In Database:-

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data In DB</title>
</head>

<body>
    <div>
        <div>
            <h1>Update Data In Database</h1>
        </div>
        <div>
            <form method="POST" autocomplete="off">
                <input name="name" type="text" placeholder="Update Your Name:" require value="<?php echo $_GET['name']; ?>" />
                <input name="email" type="email" placeholder="Update Your Email:" require value="<?php echo $_GET['email']; ?>" />
                <input name="phone" type="number" placeholder="Update Your Phone No:" require value="<?php echo $_GET['phone']; ?>" />
                <button name="updateData" type="submit" require>Update Data</button>
            </form>
            <?php
            function updateDataInDB()
            {
                require "./024.connectDatabase.php";
                if (isset($_POST["updateData"])) {
                    $id = $_GET["id"];
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $phone = $_POST["phone"];
                    if (strlen($name) >= 6 && strlen($phone) >= 11 && strlen($email) >= 8) {
                        $updateQuerySQL = "UPDATE data SET name='$name', email='$email', phone='$phone' WHERE id='$id' ";
                        $updateDataInDB = mysqli_query($dbConnection, $updateQuerySQL);
                        if ($updateDataInDB == true) {
                            header("Location: ./026.displayDataFromDB.php");
                        }
                    } else {
                        echo "<script>alert(`Check The Length Of Name Or Email Or Phone`);</script>";
                    }
                }
            }
            updateDataInDB();
            ?>
        </div>
    </div>
</body>

</html>