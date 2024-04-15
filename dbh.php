<!--Data Base Handler-->
<?php
$servername = 'localhost';
$username = 'user';
$password = 'P@$$W0rd';
$dbname = 'sklep';
$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
    die('mybad'. mysqli_connect_error());
}
?>