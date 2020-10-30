<?php

// Hash Password:-

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash Password</title>
</head>

<body>
    <div>
        <div>
            <form method="POST">
                <input type="password" name="pass" placeholder="Enter Password To Hash" />
                <button type="submit" name="hashPass">Hash Password</button>
            </form>
        </div>
        <div>
            <h1>You Hashed Password</h1>
            <?php
            if (isset($_POST["hashPass"])) {
                $password = $_POST["pass"];
                $hashPass = md5($password);
                $hashPass2 = sha1($hashPass, false);
                $hashPassFinal = hash("sha512", $hashPass2);
                echo "<h2>Hashed Password: {$hashPassFinal}";
            }
            ?>
        </div>
    </div>
</body>

</html>