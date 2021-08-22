<?php
session_start();

if(empty($_SESSION['email'])){
	
	header('location: adminlogin.php');
	echo ('logged in');
}



?>