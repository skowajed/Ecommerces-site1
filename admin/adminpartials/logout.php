<?php
session_start();

session_destroy();
// session_unset();
unset($_SESSION['email']);
unset($_SESSION['password']);
$_SESSION['logged_in']==false;

header('location: ../adminlogin.php');

?>