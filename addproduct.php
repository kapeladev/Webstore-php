<?php 
session_destroy();
session_start();
include('navbar.php');
// $name = $_SESSION['name'];
require("addformhandler.php");
include("addform.php");
?>