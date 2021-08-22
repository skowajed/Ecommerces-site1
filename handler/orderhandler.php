<?php

session_start();
require '../partials/auth.php';
include '../partials/head.php';
include('../partials/connect.php');
// $a=$_POST['address'];
// $b=$_POST['phone'];
// // echo $a + " " +$b ;
$payment_id_flag=false;
// $sql22 = "SELECT * FROM orders WHERE id=(SELECT max(id) FROM orders)";
// $result = mysqli_query($connect, $sql22);
// $row = mysqli_fetch_assoc($result);
// $last_id = $row['id'];
// echo $last_id;
if(isset($_POST['razorpay_payment_id']) ){
  $amt = $_POST['amt'];

$payment_status = "complete";
// $total = $_POST['total'];
$payment_id=$_POST['razorpay_payment_id'];

$phone = $_POST['phone'];
$email1 = $_SESSION['email1'];
$address = $_POST['address'];
$customerid = $_SESSION['customerid'];
// $payment=$_POST['payment'];


$sql = "INSERT INTO orders(customer_id,address, phone, payment_status,payment_id , total) VAlUES('$customerid','$address','$phone','$payment_status','$payment_id  ','$amt')";

$connect->query($sql);

$sql2 = "Select id from orders order by id DESC limit 1";
$result = $connect->query($sql2);
$final = $result->fetch_assoc();
$orderid = $final['id'];



foreach ($_SESSION['cart'] as $key => $value) {
    $proid = $value['item_id'];
    $quantity = $value['quantity'];


    $sql3 = "INSERT Into order_details(order_id,product_id,quantity) VAlUES('$orderid','$proid','$quantity')";
    $connect->query($sql3);

    # code...
}
	// $sql4="update orders set payment_status='complete',payment_id='$payment_id' where id='$last_id'";
  //   mysqli_query($connect,$sql4);
	unset($_SESSION['cart']);
	$payment_id_flag=true;

}
else{
	// unset($_SESSION['cart']);
}




// header("location: ../cart.php");





echo'<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  
  </head>
  <body>';
  echo'<div class="jumbotron text-center">';
if($payment_id_flag == true){
  echo'<h1 class="display-3">Thank You!</h1>';
}
else{
	echo'<h1 class="display-3">YOUR TRASACTION HAS FAILED</h1>

  <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your transaction.</p>';
}
  echo '<hr>
  <p>
    Having trouble? <a href="">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="../index.php   " role="button">Continue to homepage</a>
  </p>
</div>';
  

    echo'<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>';

?>