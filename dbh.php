<?php
require_once("env.php");
function dbconnect() {

    $conn = mysqli_connect($_ENV['DB-ADDRES'],$_ENV['DB-USER'],$_ENV['DB-PASSWORD'],$_ENV['DB-NAME']);
    
    if(!$conn){
        die('mybad'. mysqli_connect_error());
    }
    $conn ->set_charset('utf8mb4');
    return $conn;
}


?>