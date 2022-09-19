<?php 
$nick = $_POST['nick'];
$password = $_POST['password'];

    if(is_null($nick)) {
        echo "Bledny nick!\nProsimy wpisać poprawny.";
    }
    else {
        if(is_null($password)) {
            echo "Błędna długość hasła!\nProsimy wpisać poprawne.";
        }
        else {
            
            $sql = sprintf("SELECT * FROM players WHERE AccName = %s", $nick);
            $result = $connect->query($sql);
           
            if($result->num_rows() > 0) {
                    
                if($result->fetch_assoc()) {

                }
            }
              

          
        }
    
    }

    $connect->close();
 

?>