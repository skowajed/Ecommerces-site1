



<?php
session_start();
include('partials/head.php');
?>
<body>
   
<?php
include("partials/header.php")
?> 	
    
    <div class="container mt-5">
        <div class="row  justify-content-center ">
        <?php
				include("partials/connect.php");
				$id=$_GET['details_id'];
				$sql="Select * from products where id='$id'";
				$results=$connect->query($sql);
				$final=$results->fetch_assoc();

				?>
            <div class="col-md-4 col-12 mr-3 p-0">
                <img style="box-sizing: border-box; object-fit: full; object-position: center; overflow: hidden;" class="w-100 h-100" src="./admin/<?php echo $final['picture'] ?>" alt="">
            </div>
            <div class="col-12 col-md-6 pt-3 ml-3 pt-md-0">
                <div class="row">
                    <div class="col-12">
                        <h3><?php echo $final['name'] ?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="m-0">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>

                            (15 reviews)
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pt-0 mt-5">
                        <p style="text-align: justify;">
                        <?php echo $final['description'] ?>

                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex">
                        <p style="font-size: 50px; padding-right: 15px;"><i class="fas fa-rupee-sign"></i> <?php echo $final['price'] ?></p>
                        
                    </div>
                </div>
                <br>
                <br><br>
                <div class="row">
                    <div class="col-6 text-md-left text-center">
                        <a onclick="location.href='carthandler.php?cart_id=<?php echo $final['id'] ?>&cart_name=<?php echo $final['name'] ?>&cart_price=<?php echo $final['price'] ?>&cart_picture=<?php echo $final['picture'] ?>'" class="btn btn-primary " ><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php
include("partials/footer.php");
?> 	   