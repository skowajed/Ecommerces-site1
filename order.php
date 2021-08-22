<?php
session_start();
require 'partials/auth.php';
include 'partials/head.php';
?>

<body>

  <?php
  require 'partials/header.php';
  ?> <div class="container mt-5 " style="margin-bottom: 175px;">
    <div class="row">

      <table class="table table-condensed text-center">
        <thead>
          <tr>
            <th>Order no.</th>
            <th>Total</th>
            <th>Date</th>
            <th>Payment status</th>

          </tr>
        </thead>
        <tbody>
          <?php
          $id1 = $_SESSION['customerid'];
          $sql1 = "Select * from orders where customer_id= '$id1' ORDER BY created_at DESC";
          $results = $connect->query($sql1);
          // $final = $results->fetch_assoc();
          // $id = $final['id'];
          // echo $id;
          $sno = 1;
          while ($final = $results->fetch_assoc()) { ?>
            <tr>
              <td><a href="order-detail.php?oid=<?php echo $final['id'] ?>">order <?php echo $sno ?></a> </td>
              <input type="hidden" name="total" id="name" value="<?php echo $final['id'] ?>">

              <td><?php echo $final['total'] ?></td>
              <td><?php echo $final['created_at'] ?></td>
              <td><?php echo $final['payment_status'] ?></td>
            </tr>
          <?php
            $sno++;
          } ?>

        </tbody>
      </table>



    </div>
  </div>


  <?php
  include 'partials/footer.php';
  ?>