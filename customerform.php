<?php
include('partials/head.php');
?>

<body>
    <?php
    include("partials/header.php")
    ?>
   <div class="main">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="login-card">
          <h2 class="text-center mb-4">Sign In</h2>
          <form action="">
            <p>
              <label for="email">Email</label>
              <input type="text" class="form-input" name="email" placeholder="Enter your email address">
            </p>
            <p>
              <label for="password">Password</label>
              <input type="password" class="form-input" name="password" placeholder="Enter your password">
            </p>
            <input type="submit" class="btn btn-primary" value="Login">
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="login-card">
          <h2 class="text-center mb-4">Sign Up</h2>
          <form action="">
            <p>
              <label for="name">Name</label>
              <input type="text" class="form-input" name="name" placeholder="Enter your name">
            </p>
            <p>
              <label for="email">Email</label>
              <input type="text" class="form-input" name="email" placeholder="Enter your email address">
            </p>
            <p>
              <label for="password">Password</label>
              <input type="password" class="form-input" name="password" placeholder="Enter your password">
            </p>
            <input type="submit" class="btn btn-primary" value="Register">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
include('partials/footer.php');
?>

    
