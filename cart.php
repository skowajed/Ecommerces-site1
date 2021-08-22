<?php
session_start();
include('partials/head.php');
?>

<body>

	<?php
	include("partials/header.php")
	?>
	<main class="page">
		<section class="shopping-cart dark">
			<div class="container">
				<div class="block-heading">
					<h2>Shopping Cart</h2>
				</div>
				<div class="content">
					<div class="row">
						<div class="col-md-12 col-lg-8">
							<div class="items">
								<?php
								$total = 0;
								if (isset($_SESSION['cart'])) {

									foreach ($_SESSION['cart'] as $key => $value) {
										// $total = $total + $value['item_price'];
								?>

										<div class="product">
											<div class="row">
												<div class="col-md-3 ml-3">
													<img class="img-fluid mx-auto d-block image" src="./admin/<?php echo $value['item_picture'] ?>">
												</div>
												<div class="col-md-6">
													<div class="info">
														<div class="row">
															<div class="col-md-5 product-name">
																<div class="product-name">
																	<a href="#"><?php echo $value['item_name'] ?></a>
																	<div class="product-info">
																		<label for=""> price</label> <span>&#8377;<?php echo $value['item_price'] ?></span>
																		<input type="hidden" class="iprice" value="<?php echo $value['item_price'] ?>">
																		<!-- info of description will be given here
																		 -->
																	</div>
																</div>
															</div>

															<div class="col-md-4 quantity">
																<label for="quantity">Quantity:</label>

																<form action="cartremove.php" method="POST">
																	<input name="mod_quantity" id="quantity" type="number" onchange="this.form.submit();" class="form-control quantity-input iquantity" min="1" max="5" value="<?php echo $value['quantity'] ?>">
																	<input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
																</form>
															</div>

															<div class="col-md-3 "><label for="quantity">Total:</label>
																<span class="itotal">&#8377;</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-2 " style="margin-top: 3.5rem!important; ">



													<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#myModal">Remove</button>


												</div>

											</div>
										</div>
										<!--remove modal start here  -->
										<div class="modal fade" id="myModal" role="dialog">
											<div class="modal-dialog modal-sm">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>

													</div>
													<div class="modal-body">
														<p>Are sure you wanted to remove this item ? </p>
													</div>
													<div class="modal-footer">
														<div class="row">
															<div class="col-6">
																<form action="cartremove.php" method="POST">
																	<button class="btn btn-sm btn-info" name="remove">Yes</button>

																	<input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
																</form>
															</div>
															<div class="col-6 text-right">

																<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">NO</button>

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

									<?php }
								} else { ?>
									<h1>Empty</h1>
								<?php
								} ?>
								<!--  -->
							</div>
						</div>
						<div class="col-md-12 col-lg-4">
							<div class="summary">
								<h3>Summary</h3>
								<div class="summary-item"><span class="text">Subtotal</span><span class="price">&#8377;<?php echo $total ?></span></div>
								<div class="summary-item"><span class="text">Discount</span><span class="price">$0</span></div>
								<div class="summary-item"><span class="text">Shipping</span><span class="price">$0</span></div>
								<div class="summary-item"><span class="text">Total</span><span class="price" id="gtotal">&#8377;</span></div>
								<?php
								if (empty($_SESSION['cart'])) { ?>
									<button type="button" class="btn btn-primary btn-lg btn-block" disabled>Checkout</button>

								<?php
								} else {
								?>
									<button onclick="location.href='cart2.php'" type="button" class="btn btn-primary btn-lg btn-block">Checkout</button>

								<?php }
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<script>
		gt = 0;
		var iprice = document.getElementsByClassName('iprice');
		var iquantity = document.getElementsByClassName('iquantity');
		var itotal = document.getElementsByClassName('itotal');
		// var gtotal = document.getElementsByid('gtotal');

		var gtotal = document.getElementById('gtotal');


		function subTotal() {
			gt = 0;
			for (i = 0; i < iprice.length; i++) {

				itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);

				gt = gt + (iprice[i].value) * (iquantity[i].value);

			}
			gtotal.innerText = gt;
		}
		subTotal();
	</script>
	<?php
	include("partials/footer.php");
	?>