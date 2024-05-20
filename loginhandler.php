<?php 
session_start();
require('dbh.php');
$conn = dbconnect();
if(isset($_SESSION['name'])){
    $abc =  $_SESSION['name'];
    echo $_SESSION["name"]." jesteś już zalogowany ";
}
else{
    echo "ure not logged";
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
$name = $_POST['name'];
$password = hash("sha256", $_POST['password']);


try {
    $stmt = $conn -> prepare("SELECT username, password FROM users WHERE username = ? AND password = ?");
    $stmt -> bind_param("ss",$name,$password);
    $stmt -> execute();
    $res = $stmt -> get_result();
    $rescheck = mysqli_num_rows($res);
    if($rescheck > 0){  
        $_SESSION['name'] = $name;
        $_SESSION['loggedin'] = true;
        header('Location: ./index.php?loggin=sucess');
        exit();
    }
    else{ 
        echo 'login failed';
        
    }
    

}
catch(Exception $e){
    echo "".$e->getMessage()."";
}
}
?>