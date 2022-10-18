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
            $sql = "SELECT GUID, CharId, CharName FROM players WHERE AccName = '$nick'";
            $result = $connection->query($sql);
            $count = 0;
           
           
            if($result->num_rows > 0) {
                echo "<p style= 'text-align: center; font-size: 26px;'> Twoje postacie: </p>";
                while($row = $result->fetch_assoc()) {
                    if($count == 4) {
                        $count = 0;
                        echo "<br>";
                    }
                    $count++;
                    if(strlen($row['CharName']) < 11) {
                    echo "<a href='postac.php' style = 'color: black;'><div class = 'card-block'><br><img src='' alt='postac' style='text-align: center'><br>"."[Guid:".$row['GUID']."- CharId:".$row['CharId']."]".$row["CharName"]."<br>";  
                    }
                    else {
                        echo "<a href='postac.php' style = 'color: black;'><div class = 'card-block' style = 'width: 250px'><br><img src='' alt='postac' style='text-align: center'>"."[Guid:".$row['GUID']."- CharId:".$row['CharId']."]".$row["CharName"]."<br>";  
                    }
                    echo "</div></a>";
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