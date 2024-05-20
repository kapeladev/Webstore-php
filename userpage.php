<?php 
session_start(); 
if(isset($_SESSION['name'])){
   header("Location: logpage.php");
}
else{

    header("Location: logreg.php");
}?>