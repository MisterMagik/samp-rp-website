<?php
    require_once "connection.php";
    $connect = new mysqli($servername, $username, $password, $databasename);
    if($connect->connect_errno) {
        echo $connect->connect_errno;
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title> samp-rp </title>
    <link rel="stylesheet" href="styles/style.css">
    
</head>
<body>
    <div class = "up">
        <div class = "logo">

        </div>

        <div class = "homepage-block">

        </div>

        <div class = "register-block">

        </div>
        <div class = "login-block">

        </div>
        
        
    </div>
    <div class = "middle-block">

    </div>
    <footer>

    </footer>

</body>