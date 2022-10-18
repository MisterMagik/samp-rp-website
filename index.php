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
    <div class = "low-block">
        <?php 
            echo "Statystyki <br>";
            $sql = "SELECT COUNT(distinct AccName) as liczba_zarejestrowanych_kont FROM players ";
            $result = $connection->query($sql);
            $row = $result->fetch_assoc();
            echo "Zarejestrowanych kont na serwerze: ".$row['liczba_zarejestrowanych_kont']."<br>";
            mysqli_free_result($result);

            $sql = "SELECT COUNT(UID) as liczba_postaci FROM players";
            $result = $connection->query($sql);
            $row = $result->fetch_assoc();
            echo "Wszystkich postaci na serwerze: ".$row['liczba_postaci'];
        ?>
    </div>

    <footer>
        <?php echo "Strona wykonana przez MisterMagik 2022 - ".date("Y"); ?>
    </footer>

</body>

<?php $connection->close();  ?>