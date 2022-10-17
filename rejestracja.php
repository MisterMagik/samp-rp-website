<?php
    require_once "connection.php";
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
            <p> Rejestracja </p>
        </div>
    </div>
    <footer>
        <?php echo "Strona wykonana przez MisterMagik 2022 - ".date("Y"); ?>
    </footer>

</body>

<?php $connect->close();  ?>