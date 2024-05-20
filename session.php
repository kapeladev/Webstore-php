<?php 
session_abort();
session_start();
$_SESSION['name'] = $name;
?>