<?php 
include('../partials/connect.php');
$newid=$_GET['del_id'];

$sql="Delete from products where id='$newid'";

if (mysqli_query($connect,$sql)) {
	header('location: productshow.php');
}else{
	echo "Not Deleted";
}










?>