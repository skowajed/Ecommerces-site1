<?php
$sh = false;
$shr = '';
    if (isset($_POST['sub'])) {
        $sh = false;
        include 'partials/connect.php';
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $existsql = "SELECT * FROM `customers` where email='$email'";
        $result = mysqli_query($connect, $existsql);
        if (mysqli_num_rows($result) > 0) {
            $shr = 'email already exist';
        } else {
            if ($password == $cpassword) {
                $sql = "INSERT INTO `customers` ( `email`, `password`, `username`) VALUES ('$email', '$password', '$username')";
                $result = mysqli_query($connect, $sql);
                if ($result) {
                    $sh = true;

                    header('location: signin.php');
                } else {
                    $shr = 'not stored in db';
                }
            } else {
                $shr = 'password is not same';
            }
        }
    }

include 'partials/head.php';
?>

<body>
    <?php
    include 'partials/header.php';
    ?>
    
    <?php if ($sh) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your accout is created
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
if ($shr) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Wrong!</strong> '.$shr.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>
<div class="container mt-3">
<div class="row justify-content-center">
  <div class="col-4">
  <h1>SIGN UP</h1>

<form action="signup.php" id="signup" method="post" >
<div class="form-group">
<label for="email"> Email id</label>
<input type="text" class="form-control"name = "email"  id="email" aria-describedby="emailHelp" placeholder="Enter email">

</div>
<div class="form-group">
<label for="username"> Username</label>
<input type="text" class="form-control"name = "username"  id="username" aria-describedby="emailHelp" placeholder="Enter username">

</div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" class="form-control" id="password" name="password" placeholder="Password">
</div>
<div class="form-group">
<label for="cpassword">Confirm Password</label>
<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Password">
</div>
<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
<button type="submit" class="btn btn-primary" name ="sub">Submit</button>
</form>
  </div>
</div>
</div>

<?php
include 'partials/footer.php';
?> 	  