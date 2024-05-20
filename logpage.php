<?php
session_destroy();
session_start();
include('navbar.php');
$name = $_SESSION['name'];
include('logpageht.php');
?>
