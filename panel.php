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
    
            <div class = "register-block">
                <p> Witaj <a href = "panel.php">'.$_SESSION['nick'].'</a>
            </div>
            <div class = "login-block">
                <a href = "logout.php"> Wyloguj się! </a>
            </div>
            
            
        </div>';
    }
    ?>
    <div class = "middle-block">
        <div class = "content-block">
            <?php
            $nick = $_SESSION['nick'];
            $sql = "SELECT CharName FROM players WHERE AccName = '$nick'";
            $result = $connection->query($sql);
           
           
           
            if($result->num_rows > 0) {
                echo "<p> Twoje postacie: </p>";
                while($row = $result->fetch_assoc()) {
                  echo $row["CharName"]."<br>";  
                }
            }
            else {
                echo "<p> Nie posiadasz postaci </p>";
            }
            ?>
        </div>
    </div>
    <footer>
        <?php echo "Strona wykonana przez MisterMagik 2022 - ".date("Y"); ?>
    </footer>

</body>

<?php $connection->close();  ?>