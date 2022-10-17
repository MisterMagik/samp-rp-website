<?php
    require_once "connection.php";
    session_start();
    $connection = new mysqli($servername, $username, $dbpassword, $databasename);
    if($connection->connect_errno) {
        echo $connection->connect_errno;
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title> samp-rp </title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class = "up">
        <div class = "logo-block">
            <img src = "" alt = "logo">
        </div>

        <div class = "homepage-block">
            <a href = "index.php"> Strona główna </a>
        </div>

        <div class = "register-block">
            <a href = "rejestracja.php"> Zarejestruj się! </a>
        </div>
        <div class = "login-block">
            <a href = "logowanie.php"> Zaloguj się! </a>
        </div>
        
        
    </div>
    <div class = "middle-block">
        <div class = "content-block">
            <p> Logowanie </p>
            <form method="POST" action = "login.php">
                <input type="text" value = "nick" name = "nick"><br>
                <input type="password" value = "hasło" name = "password"><br>
                <input type="submit" value = "zaloguj">
            </form>
        </div>
    </div>
    <footer>
        <?php echo "Strona wykonana przez MisterMagik 2022 - ".date("Y"); ?>
    </footer>

</body>

<?php $connection->close();  ?>