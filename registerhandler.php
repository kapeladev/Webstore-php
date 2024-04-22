<?php 
require(__DIR__."/dbh.php");
$conn = dbconnect();
$time = date('Y-m-d H:i:s');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['name']) != '' && isset($_POST['email']) && isset($_POST['password'])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
    }
    try{
        $sql = "SELECT username From users WHERE  username = '$name' OR gmail = '$email';";
        // $sql = "INSERT INTO users (username, gmail, password, created_at) VALUES ('$name', '$email', '$password', '$time')";
        if (mysqli_query($conn, $sql)) {

        } else {
            echo $errorCode = mysqli_errno($conn);
        }
        if($errorCode == 1062){
            
        }
    }
    catch(Exception $e) {
        echo "Username or email is already in use" .$e;
}

}

?>