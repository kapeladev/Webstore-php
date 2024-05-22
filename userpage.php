<?php 
session_start(); 
echo "elo";
if(isset($_SESSION['name']) && $_SESSION['name'] !='admin'){
   header("Location: logpage.php");
}
elseif($_SESSION['name'] == 'admin'){
    header("Location: adminpage.php");
}
else{
    header("Location: login.php");
}
?>