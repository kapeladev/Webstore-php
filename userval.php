<?php 
session_start();
  $log = false;
  if(isset($_SESSION['name'])){
    $log = true;
  }
  return $log;
?>