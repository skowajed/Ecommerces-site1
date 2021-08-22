<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: signin.php');
}
include 'partials/head.php';
?>

<body>

	<?php
    include 'partials/header.php';
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
                                        $total = $total + $value['item_price']*$value['quantity'] ; ?>
								
										<div class="product">
											<div class="row">
												<div class="col-md-3 ml-3">
													<img class="img-fluid mx-auto d-block image" src="./admin/<?php echo $value['item_picture']; ?>">
												</div>
												<div class="col-md-6">
													<div class="info">
														<div class="row">
															<div class="col-md-5 product-name">
																<div class="product-name">
																	<a href="#"><?php echo $value['item_name']; ?></a><br><br>
																	<label for=""> price</label> <span>&#8377;<?php echo $value['item_price'] ?></span>
																	<div class="product-info">
																		<!-- info of description will be given here
																		 -->
																	</div>
																</div>
															</div>
															
															<div class="col-md-4 quantity">
																<label for="quantity">Quantity:</label><br>
																<span><?php echo $value['quantity']; ?></span>

															</div>
															<div class="col-md-3 ">
															<label for=""> total </label><br>
																<span>&#8377;<?php echo $value['item_price']; ?></span>
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

																	<input type="hidden" name="item_name" value="<?php echo $value['item_name']; ?>">
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

								<?php
                                    }
                                } ?>
								<!--  -->
							</div>
						</div>
						<div class="col-md-12 col-lg-4">
							<div class="summary">
								<h3>Summary</h3>
								<div class="summary-item"><span class="text">Total</span><span class="price">&#8377;<?php echo $total; ?></span></div>
                                <br><br><br>

								<form action="payscript.php" method="POST" id="summary" >
                                <div class="summary-item"><span class="text">Address</span><input class="form-control form-control-sm" type="text" id="address" name="address" placeholder="address"><span class="price"></span></div>
                                
                                <div class="summary-item"><span class="text">Phone Number</span><span><input class="form-control form-control-sm" id="phone" type="text" name="phone" placeholder="Phone number"></span></div>
<!--                                
                                <div class="summary-item"><span class="text">Discount</span><select class="form-control form-control-sm" name="payment" >
											<option value="cash">Cash on delivery</option>
											<option value="paypal">Paypal</option>
										</select></span></div> -->
                                        <br>
                                        <div class="summary-item"><span class="text">Total</span><span class="price">&#8377;<?php echo $total; ?></span></div>
                                        <br><br>
                                        <input type="hidden" name="total" id="total" value="<?php echo $total; ?>">
                                        <button type="sumbit" class="btn btn-primary btn-lg btn-block" name="placeorder" onclick="pay1_now()"><span class="text-center" >Proceed to pay</span></button>
                                </form>
                                
                                <!-- <div class="summary-item"><span class="text">Discount</span><input class="form-control form-control-sm" type="text" name="address" placeholder="address"><span class="price">$0</span></div>
								<div class="summary-item"><span class="text">Shipping</span><span class="price">$0</span></div>
								 -->
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>


	<?php
    include 'partials/footer.php';
    ?>
	