<?php 
    $servername = "127.0.0.1";
    $username = "root";
    $dbpassword = "root";
    $databasename = "samp";

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


    $connection->close();

?>