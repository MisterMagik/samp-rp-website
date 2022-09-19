<?php
    require_once("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title> samp-rp </title>
    <link rel="stylesheet" href="styles/style.css">
    
</head>
<body>
    <div class = "container">
        <div class ="main-box">
            <form method="POST" action = "systems/login.php">
                <input type="text" value = "nick" name = "nick"><br>
                <input type="password" value = "hasło" name = "password"><br>
                <input type="submit" value = "zaloguj">
            </form>
        </div>
        <?php 

        echo "Dziala";
        ?>
    </div>

</body>