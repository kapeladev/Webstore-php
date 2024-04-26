<?php 
require(__DIR__."/dbh.php");
$conn = dbconnect();
$time = date('Y-m-d H:i:s');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $password = hash("sha256", $_POST["password"]);
    $email = $_POST["email"];
        try{
        // $sql_insert = "INSERT INTO users (username, email, password, created_at) VALUES ('$name', '$email', '$password', '$time')";
            // $res = mysqli_query($conn, $sql_insert);
            $stmt = $conn -> prepare("INSERT INTO users (username, email, password, created_at) VALUES (?, ?, ?, ?)");
            $stmt -> bind_param("ssss",$name,$email,$password,$time);
            $stmt ->execute();
            header("Location: login.php");
            ob_end_flush();
        }
        
        catch(Exception $e){
            if(strpos($e, "'$name-$email'") !== false){
                echo "the username: "."'$name'"."and gmail: "."'$email'"." is already in use";
                
            }elseif(strpos($e, "'$name") !== false){
                echo "the username: "."'$name'"." is already in use";
            }
            elseif(strpos($e, "'$email'") !== false){
                echo "the email: "."'$email'". "is already in use";
            }
            else{
                echo $e->getMessage();
            }
        
    }
    }

?>