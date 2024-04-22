<?php
function dbconnect() {
    $servername = 'localhost';
    $username = 'user';
    $password = 'P@$$W0rd';
    $dbname = 'shop';
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if(!$conn){
        die('mybad'. mysqli_connect_error());
    }
    return $conn;
}


?>
