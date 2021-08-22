<?php
session_start();
include('partials/head.php');
?>

<body>

  <?php
  include("partials/header.php")
  ?>
  <div class="text-center mt-5">
  <h2>
  Products</h2></div>
  <div class="container mt-5">

    <div class="row">
      <?php
      if(isset($_GET['cat'])){
      $cat=$_GET['cat'];
      include("partials/connect.php");
      $sql1 = "SELECT * FROM categories WHERE name='$cat'";
      $result1 = mysqli_query($connect, $sql1);
      $row1 = mysqli_fetch_assoc($result1);
      $last_id = $row1['id'];
      // echo $last_id;
      $sql = "select * from products where category_id=$last_id";
    }
     else{   
      $sql = "select * from products ";
     }
     
      $results = $connect->query($sql);


      while ($final = $results->fetch_assoc()) {


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
      <?php } ?>


    </div>
  </div>

  <?php
  include("partials/footer.php")
  ?>