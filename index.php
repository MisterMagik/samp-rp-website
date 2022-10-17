<?php
    require_once "connection.php";
    session_start();
    $connect = new mysqli($servername, $username, $dbpassword, $databasename);
    if($connect->connect_errno) {
        echo $connect->connect_errno;
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
    <?php

    if(!isset($_SESSION['logged'])) { 
    echo '
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
        
        
    </div>'; }
    else {
        echo '
        <div class = "up">
            <div class = "logo-block">
                <img src = "" alt = "logo">
            </div>
    
            <div class = "homepage-block">
                <a href = "index.php"> Strona główna </a>
            </div>
    
            <div class = "account-block">
                <p> Witaj <a href = "panel.php">'.$_SESSION['nick'].'</a>
            </div>
            <div class = "logout-block">
                <a href = "logout.php"> Wyloguj się! </a>
            </div>
            
            
        </div>';
    }
    ?>
    <div class = "middle-block">
        <div class = "content-block">
            <p> Strona projektu samp-rp (Old School RolePlay) </p>
        </div>
    </div>
    <footer>
        <?php echo "Strona wykonana przez MisterMagik 2022 - ".date("Y"); ?>
    </footer>

</body>

<?php $connect->close();  ?>