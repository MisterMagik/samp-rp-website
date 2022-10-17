<?php 
require_once "connection.php";
session_start();
$nick = $_POST['nick'];
$password = $_POST['password'];

    $connection = new mysqli($servername, $username, $dbpassword, $databasename);

    if($connection->connect_errno) {
        echo "Problem techniczny, prosimy sprobować ponownie."; //Error message to user
        printf("Connection lose", $connection->error);
        if($connection->ping()) {
            printf("Connection ok");
        }
        else {
            print("Connection lose");
        }
    }
    else {

    }

    if(is_null($nick)) {
        echo "Bledny nick!\nProsimy wpisać poprawny.";
    }
    else {
        if(is_null($password)) {
            echo "Błędna długość hasła!\nProsimy wpisać poprawne.";
        }
        else {
            
            $sql = "SELECT * FROM players WHERE AccName = '$nick';";
            $result = $connection->query($sql);
           
            if($result->num_rows > 0) {
                
                while($row = $result->fetch_assoc()) {
                  echo $row["AccName"];  
                  echo "<p> Jest konto! </p>";
                  $_SESSION['logged'] = true;
                  $_SESSION['nick'] = $nick;
                  header('Location: index.php');
                }
            }
            else {
                echo "<p> Nie istniejace konto! </p>";
                $_SESSION['logged'] = false;
                header('Location: logowanie.php');

            }
              

          
        }
    
    }

    $connection->close();
 

?>