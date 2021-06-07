<?php 
session_start();
if(isset($_SESSION['regno'])){
session_destroy();}
$ref= @$_GET['q'];
header("location:$ref");
?>