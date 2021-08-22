	     
<?php

include("partials/connect.php");
$loggedin_user = false;

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){

  $loggedin_user=true;
} 
echo'
<header class="container-fluid p-0">
      <div class="col-lg-12 p-0">
          <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
              <a class="navbar-brand" href="/ecommerce1/">Easy Cart</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav nav ml-md-auto">
                  <li class="nav-item ">
                    <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="product.php">Products</a>
                  </li>
                  
                </ul>
                <div class="ml-auto ">

                  <ul  class="navbar-nav  ml-md-auto">';
                 
                 if($loggedin_user==true) {
                 echo'<li> <a class="text-white nav-link" href="./partials/logout.php" >logout</a>
                  </li>
               
                 <li class="nav-item dropdown">
                 <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"> '.$_SESSION['username'].' </i>
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="margin-top : 8px">
                   <a class="dropdown-item" href="order.php">My orders</a>
                  
                 </div>
               </li>
                 ';
          
                 }
                 else{
                  echo'<li> <a class="text-white nav-link" href="Signup.php">Sign Up</a>
                  <li> <a class="text-white nav-link" href="signin.php">Sign In</a>';

                 }
                 echo'<li> <a class="text-white nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                 </li>
                 
                </ul></div>
            </nav>
          </div>
    </header>';

    ?>