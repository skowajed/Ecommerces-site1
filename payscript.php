<?php
session_start();
include('./partials/connect.php');


$amt = $_POST['total'];

$payment_status = "pending";
$total = $_POST['total'];

$phone = $_POST['phone'];
$email1 = $_SESSION['email1'];
$address = $_POST['address'];
// $customerid = $_SESSION['customerid'];
// // $payment=$_POST['payment'];


// $sql = "INSERT INTO orders(customer_id,address, phone, payment_status, total) VAlUES('$customerid','$address','$phone','$payment_status','$amt')";

// $connect->query($sql);

// $sql2 = "Select id from orders order by id DESC limit 1";
// $result = $connect->query($sql2);
// $final = $result->fetch_assoc();
// $orderid = $final['id'];



// foreach ($_SESSION['cart'] as $key => $value) {
//     $proid = $value['item_id'];
//     $quantity = $value['quantity'];


//     $sql3 = "INSERT Into order_details(order_id,product_id,quantity) VAlUES('$orderid','$proid','$quantity')";
//     $connect->query($sql3);

//     # code...
// }
// $sql22 = "SELECT * FROM orders WHERE id=(SELECT max(id) FROM orders)";
// $result = mysqli_query($connect, $sql22);
// $row = mysqli_fetch_assoc($result);
// $last_id = $row['id'];
// echo $last_id;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   
    <form action="./handler/orderhandler.php" method="POST">
    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="rzp_test_s69U15lfoLuDdA" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys data-amount="<?php echo $_POST['total']*100 ?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35. data-currency="INR" // You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account data_id="<?php echo $last_id; ?>   " // Replace with the order_id generated by you in the backend. data-buttontext="Pay with Razorpay" data-name="Easy Cart" data-description="Easy Cart" data-image="https://cdn.dribbble.com/users/230290/screenshots/15128882/media/4175d17c66f179fea9b969bbf946820f.jpg?compress=1&resize=400x300" data-prefill.name="Gaurav Kumar"
        data-prefill.contact ="<?php echo $phone ?>"
         data-prefill.email="<?php echo $email1 ?> " data-theme.color="#F37254"></script>
   
        <input type="hidden" custom="Hidden Element" name="hidden">
        <input type="hidden"  name="address" value="<?php echo $address; ?>">
        <input type="hidden"  name="phone" value="<?php echo $phone ; ?>">
        <input type="hidden"  name="address" value="<?php echo $phone ; ?>">
        <input type="hidden"  name="amt" value="<?php echo $amt ; ?>">
</form>
<form action="./handler/orderhandler.php">
<button type="submit" class="btn btn-outline-success">cancel the transaction</button>

</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<style>
.razorpay-payment-button{
    display: none;
}
</style>
<script>
$(document).ready(function(){
  $('.razorpay-payment-button').click();

 
});

</Script>


   
