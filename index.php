

<?php
session_start();
require 'partials/auth.php';
include 'partials/head.php';
?>

<body>
   
<?php
require 'partials/header.php';
?> 	   
<?php if ($_SESSION && $_SESSION['count']==1 ) {
  if($_SESSION['count']==1){
  $_SESSION['count']--;
  }
  ?>
<div class="alert alert-success" role="alert">
    You are successfully login. Welcome
    <?php echo $_SESSION['username']; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php
}

 ?>
    <main class="container-fluid p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/pic (1).jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/pic (2).jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/pic (3).jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev bg-dark" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next bg-dark" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    
        <div class="container-fluid pt-2">
          <div class="row bg-primary text-white">
            <div class="col-12">
              <div class="row pt-3">
                <div class="col-md-10 col-12 text-md-left text-center">
                  <h3><b>Deals Of The Days</b></h3>
                </div>
                <div class="col-md-2 col-12 text-center text-md-right">
                  <a class="btn btn-dark" href="product.php">VIEW ALL</a>
                </div>
              </div>
              <hr class="w-100 text-dark h-2">
              <div class="row" style="height: 240px;">
                <div class="col-12">
                  <section class="slider">
                    <ul id="autoWidth" class="cs-hidden">
                   <li class="item-a">
                        <div class="box">
                          <div class="box-img">
                          <a href="product.php?cat=pant"> <img src="assets/images/pant (3).jpg" alt=""></a>
                          </div>
                          <div class="box-details">
                            <div class="title">
                             <h5><b>pants</b></h5>
                            </div>  
                            
                          </div>
                        </div>
                      </li>
                      <li class="item-b">
                        <div class="box">
                          <div class="box-img">
                          <a href="product.php?cat=bag"> <img src="assets/images/bag.jpg" alt=""></a>
                          </div>
                          <div class="box-details">
                            <div class="title">
                              <h5><b>Bag</b></h5>
                            </div>  
                            
                          </div>
                        </div>
                      </li>
                      <li class="item-c">
                        <div class="box">
                          <div class="box-img">
                           <a href="product.php?cat=shirt"> <img src="assets/images/shirt (2).jpg" alt=""></a>
                          </div>
                          <div class="box-details">
                            <div class="title">
                              <h5><b>shirt</b></h5>
                              
                            </div>  
                            
                          </div>
                        </div>
                      </li>
                      <li class="item-d">
                        <div class="box">
                          <div class="box-img">
                          <a href="product.php?cat=sunglass"> <img src="assets/images/sg1.jpg" alt=""></a>
                          </div>
                          <div class="box-details">
                            <div class="title">
                              <h5><b>Sunglasses</b></h5>
                             
                            </div>  
                            
                          </div>
                        </div>
                      </li>
                      <li class="item-e">
                        <div class="box">
                          <div class="box-img">
                          <a href="product.php?cat=pant"> <img src="assets/images/pant (2).jpg" alt=""></a>
                          </div>
                          <div class="box-details">
                            <div class="title ">
                              <h5><b>pants</b></h5>
                              
                            </div>  
                            <div class="price">
                             
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="item-f">
                        <div class="box">
                          <div class="box-img">
                          <a href="product.php?cat=shirt"> <img src="assets/images/shirt (3).jpg" alt=""></a>
                          </div>
                          <div class="box-details">
                            <div class="title">
                              <h5><b>shirt</b></h5>
                              
                            </div>  
                            
                          </div>
                        </div>
                      </li>
                      <!-- <li class="item-g">
                        <div class="box">
                          <div class="box-img">
                            <img src="assets/images/pant (2).jpg" alt="">
                          </div>
                          <div class="box-details">
                            <div class="title">
                              <h5><b>Title</b></h5>
                             
                            </div>  
                           
                          </div>
                        </div>
                      </li> -->
                    </ul>
                  </section>  
                </div>
              </div>
            </div>
            
            <!-- <div class="col-md-2 col-12">
              <div class="row">
                <div class="col-12 p-0 dealsphoto-section">
                  <a href="#">
                    <img class="w-100 h-100" src="assets/images/pic (2).jpg" alt="">
                  </a>
                </div>
              </div>
            </div> -->
          </div>
        </div>

       
        </div>

    </main>
    </div>
        <div class="text-center mt-5">
        <h3>products</h3>
        </div>
    <div class="container">
    <div class="row">
      <?php
      
      include("partials/connect.php");
        
      $sql = "select * from products ";
     
     
      $results = $connect->query($sql);

      $count = 1;

      while ($final = $results->fetch_assoc()) {
        $count++;

      ?>

        <div class="col-6 col-md-3 mt-sm-4">
          <div class="card">
            <img class="card-img-top" src="./admin/<?php echo $final['picture'] ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $final['name'] ?></h5>

              <a href="product_detail.php?details_id=<?php echo $final['id'] ?>" class="btn btn-primary">Quick view</a>
            </div>
          </div>
        </div>
      <?php
    if($count>=5)
    break; } ?>


    </div>
    </div>
        <div class="text-center mt-5">
        <button type="button"  class="btn btn-outline-primary" ><a href="product.php">load more</a></button>
        </div>
    
    <?php
include 'partials/footer.php';
?> 	     