<?php 
session_start();
$_SESSION['user_name'] = NULL;
$_SESSION['email'] = NULL;
$_SESSION['password'] = NULL;
header('location:../index.php');

?>