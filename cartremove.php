<?php
session_start();


if (isset($_POST['remove'])) {
	foreach ($_SESSION['cart'] as $key => $value) {
			if ($value['item_name']==$_POST['item_name']) {
				unset($_SESSION['cart'][$key]);
				$_SESSION['cart']=array_values($_SESSION['cart']);
				echo "<script>
					alert('item removed');
					window.location.href='cart.php';
					</script>
				";
						# code...
					}		# code...
	}
	# code...
}



if (isset($_POST['mod_quantity'])) {
	$qty=$_POST['mod_quantity'];
	foreach ($_SESSION['cart'] as $key => $value) {
			if ($value['item_name']==$_POST['item_name']) {
				$_SESSION['cart'][$key]['quantity'] = $qty;
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