<?php
session_start();
$qty=$_GET['quantity'];

if (isset($_POST['update'])) {
	foreach ($_SESSION['cart'] as $key => $value) {
			if ($value['item_name']==$_POST['item_name']) {
				$_SESSION['cart'][$key]['quantity']=$qty;
				$_SESSION['cart']=array_values($_SESSION['cart']);
				echo "<script>
					alert('item quantity updated');
					window.location.href='cart.php';
					</script>
				";
						# code...
					}		# code...
	}
	# code...
}





?>