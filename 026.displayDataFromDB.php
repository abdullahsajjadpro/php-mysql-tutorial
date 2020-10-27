<?php

// Display Data From Database:-

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info From Database</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require "./024.connectDatabase.php";
            $selectQuerySQL = "SELECT * FROM data";
            $selectFromDB = mysqli_query($dbConnection, $selectQuerySQL);
            while ($data = mysqli_fetch_array($selectFromDB)) {
            ?>
                <tr>
                    <td><?php echo $data["id"]; ?></td>
                    <td><?php echo $data["name"]; ?></td>
                    <td><?php echo $data["email"]; ?></td>
                    <td><?php echo $data["phone"]; ?></td>
                    <td><button><a href="./027.updateDataInDB.php?id=<?php echo $data['id'] ?>&name=<?php echo $data['name'] ?>&email=<?php echo $data['email'] ?>&phone=<?php echo $data['phone'] ?>">Update</a></button></td>
                    <td><button><a href="./028.deleteDataInDB.php?id=<?php echo $data['id'] ?>">Delete</a></button></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <button><a href="./025.insertDataInDatabase.php">Insert Data In Database</a></button>
</body>

</html>