<?php
session_start();
include 'partials/connect.php';

$login = false;
$shr = false;
$_SESSION['count'] = 0;
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//

//     $username = mysqli_real_escape_string($connect, $_POST['username']);
//     $password = mysqli_real_escape_string($connect, $_POST['password']);

//     $result = $connect->query("SELECT * FROM customers WHERE email ='$username' AND password='$password'");
//     if ($result) {
//         $result1 = $result->fetch_array(MYSQLI_ASSOC);
//         $login = true;
//         echo "<script>alert('you're logged in');
// 	window.location.href='index.php';
// 	</script>";
//         session_start();
//         $_SESSION['loggedin'] = true;
//         $_SESSION['username'] = $result1['username'];
//         $_SESSION['customerid'] = $result1['id'];

//         header('location: index.php');
//     } else {
//         $shr = 'invalid credential';
//     }
// }

if (isset($_POST['sub'])) {
    if (!empty($_POST['email']) || !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `customers` WHERE `email` ='$email' AND `password` = '$password' ";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($row == true) {
            $_SESSION['loggedin'] = true;
            $_SESSION['customerid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email1'] = $row['email'];
            $_SESSION['count'] = 1;
            


            header('Location: index.php');
        } else { ?>      
          <div class="alert alert-danger" role="alert">
          <?php echo 'User doesnot exits, Please <a href ="signup.php">register </a> your self'; ?>
              <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button> -->
          </div>
          <?php
        }
    } else {
        echo 'Please enter yours login details';
    }
}

?>
<?php
include 'partials/head.php';
?>

<body>
    <?php
    include 'partials/header.php';
    ?>
<?php
// if ($login) {
//         echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>Success!</strong> You r logged in
//   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//     <span aria-hidden="true">&times;</span>
//   </button>
// </div>';
//     }
// if ($shr) {
//     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//   <strong>Wrong!</strong>  please type your valid username and password again
//   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//     <span aria-hidden="true">&times;</span>
//   </button>
// </div>';
// }
?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-4">
    <h2 class="text-center">LOGIN PAGE</h2>
        <form id='singin' action="signin.php" method="post" >
      
      <div class="form-group">
        <label for="email"> Email</label>
        <input type="text" class="form-control" name = "email"  id="email" aria-describedby="emailHelp" placeholder="Enter email">
      
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
      
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      
      <div class="row justify-content-center">
        <div class="col-6 mt-2">
          <button type="submit" class="btn btn-primary" name ="sub">submit</button>
        </div>
        
      </div>
      
    </form>
    </div>
  </div>
    
</div>
<?php
    include 'partials/footer.php';
    ?>