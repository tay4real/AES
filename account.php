<?php
include_once 'dbConnection.php';
session_start();
  if(!(isset($_SESSION['regno']))){
header("location:index.php");

}
?>